import os
import sys
from PIL import Image

def create_theme_pdf():
    print("Starting PDF generation process...", flush=True)
    
    # Absolute paths to the screenshots captured by browser subagent
    screenshots = [
        r"C:\Users\bharti\.gemini\antigravity\brain\5e826ba8-25a8-4ccc-ae6e-65a674b9da49\theme_1_saas_1774681741856.png",
        r"C:\Users\bharti\.gemini\antigravity\brain\5e826ba8-25a8-4ccc-ae6e-65a674b9da49\theme_2_executive_1774681842688.png",
        r"C:\Users\bharti\.gemini\antigravity\brain\5e826ba8-25a8-4ccc-ae6e-65a674b9da49\theme_3_minimalist_1774681918040.png",
        r"C:\Users\bharti\.gemini\antigravity\brain\5e826ba8-25a8-4ccc-ae6e-65a674b9da49\theme_4_soft_nordic_1774682042109.png",
        r"C:\Users\bharti\.gemini\antigravity\brain\5e826ba8-25a8-4ccc-ae6e-65a674b9da49\theme_5_midnight_1774682130956.png"
    ]

    output_pdf = r"C:\Users\bharti\Desktop\Digi\Digigyapan_Themes_Showcase.pdf"
    
    images = []
    print(f"Checking for {len(screenshots)} screenshots...", flush=True)
    for img_path in screenshots:
        if os.path.exists(img_path):
            print(f"Loading {img_path}...", flush=True)
            try:
                img = Image.open(img_path)
                if img.mode != 'RGB':
                    img = img.convert('RGB')
                images.append(img)
                print(f"Successfully loaded and converted {img_path}", flush=True)
            except Exception as e:
                print(f"Error loading {img_path}: {e}", flush=True)
        else:
            print(f"MISSING: {img_path}", flush=True)

    if images:
        print(f"Saving {len(images)} images to {output_pdf}...", flush=True)
        try:
            images[0].save(output_pdf, save_all=True, append_images=images[1:], resolution=100.0, quality=95)
            print(f"PDF SUCCESSFULLY CREATED at {output_pdf}", flush=True)
        except Exception as e:
            print(f"ERROR SAVING PDF: {e}", flush=True)
    else:
        print("CRITICAL: No images found to create PDF.", flush=True)

if __name__ == "__main__":
    try:
        create_theme_pdf()
    except Exception as e:
        print(f"FATAL ERROR: {e}", flush=True)
        sys.exit(1)
