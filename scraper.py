import requests
from bs4 import BeautifulSoup
import json
import time

def scrape_digigyapan():
    base_url = "https://digigyapan.in/"
    blog_url = "https://digigyapan.in/blog-of-digigyapan/"
    
    headers = {
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
    }

    # Data container
    scraped_data = {
        "business_info": {},
        "services": [],
        "blog_posts": []
    }

    # 1. Scrape Homepage for Business Info and Services
    try:
        response = requests.get(base_url, headers=headers)
        if response.status_code == 200:
            soup = BeautifulSoup(response.content, 'html.parser')
            
            # Extract Logo
            logo_elem = soup.find('img', class_='elementor-single-it-logo') or soup.find('img', alt='Logo')
            logo_url = logo_elem['src'] if logo_elem and 'src' in logo_elem.attrs else "https://digigyapan.in/wp-content/uploads/2023/11/Logo.png"

            scraped_data["business_info"] = {
                "name": "Digi Gyapan",
                "logo_url": logo_url,
                "phone": "+91-8053421431",
                "email": "info@digigyapan.in",
                "address": "Digi Gyapan, Adarsh Nagar, Sonipat, Haryana - 131001"
            }

            # Services
            service_elements = soup.find_all(class_='elementor-widget-icon-box')
            for service in service_elements:
                title = service.find(class_='elementor-icon-box-title')
                desc = service.find(class_='elementor-icon-box-description')
                if title:
                    scraped_data["services"].append({
                        "name": title.get_text(strip=True),
                        "description": desc.get_text(strip=True) if desc else "",
                        "icon_type": "inline-svg"
                    })

    except Exception as e:
        print(f"Error scraping homepage: {e}")

    # 2. Scrape Blog Posts
    try:
        response = requests.get(blog_url, headers=headers)
        if response.status_code == 200:
            soup = BeautifulSoup(response.content, 'html.parser')
            
            blog_elements = soup.find_all('article')
            for post in blog_elements:
                title_elem = post.find('h3') or post.find('h2')
                link_elem = post.find('a')
                date_elem = post.find(class_='elementor-post-date')
                excerpt_elem = post.find(class_='elementor-post__excerpt')
                img_elem = post.find('img')
                
                if title_elem:
                    scraped_data["blog_posts"].append({
                        "title": title_elem.get_text(strip=True),
                        "link": link_elem['href'] if link_elem and 'href' in link_elem.attrs else "",
                        "date": date_elem.get_text(strip=True) if date_elem else "",
                        "summary": excerpt_elem.get_text(strip=True) if excerpt_elem else "",
                        "featured_image": img_elem['src'] if img_elem and 'src' in img_elem.attrs else ""
                    })

    except Exception as e:
        print(f"Error scraping blog: {e}")

    # Save to JSON
    output_file = "scraped_data.json"
    with open(output_file, 'w', encoding='utf-8') as f:
        json.dump(scraped_data, f, indent=4, ensure_ascii=False)
    
    print(f"Scraping complete. Data saved to {output_file}")
    return scraped_data

if __name__ == "__main__":
    scrape_digigyapan()
