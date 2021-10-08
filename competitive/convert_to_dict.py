from lxml import etree
from PIL import Image
import csv
import os
import re


def atoi(text):
    return int(text) if text.isdigit() else text

def natural_keys(text):
    return [atoi(c) for c in re.split(r'(\d+)', text)]

images_path = "D:\Downloads\General\WIDER_val\images"
folders = os.listdir(images_path)
folders.sort(ket=natural_keys)

save_path = 'D:\Downloads\General\WIDER_val\images_anotations'
os.makedir(save_path)

anotation_txt_path = "D:/Downloads/General/anotations/anotations.txt"

labels = ['face']

anotation_txt_file = open(anotation_txt_path, 'r')

len(anotation_txt_file)