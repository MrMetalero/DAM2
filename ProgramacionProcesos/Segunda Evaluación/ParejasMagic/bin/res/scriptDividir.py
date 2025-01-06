#!/usr/bin/env python3
import json
import sys
import re

def parse_mana_cost(mana_cost):
    # Defining the regex patterns for each type of mana
    mana_pattern = {
        'white': r'\{W\}',  # Matches {W}
        'blue': r'\{U\}',   # Matches {U}
        'black': r'\{B\}',  # Matches {B}
        'red': r'\{R\}',    # Matches {R}
        'green': r'\{G\}',  # Matches {G}
        'colorless': r'\{\d+\}'  # Matches generic mana (e.g., {2})
    }

    # Initialize the mana count
    mana_counts = {
        'white': 0,
        'blue': 0,
        'black': 0,
        'red': 0,
        'green': 0,
        'colorless': 0
    }

    # Count the amount of each type of mana in the manaCost string
    for color, pattern in mana_pattern.items():
        mana_counts[color] = len(re.findall(pattern, mana_cost))

    # Total CMC is the sum of all mana amounts
    cmc = mana_counts['white'] + mana_counts['blue'] + mana_counts['black'] + mana_counts['red'] + mana_counts['green']

    # Handle colorless mana (e.g., {2}, {3})
    colorless_matches = re.findall(r'\{(\d+)\}', mana_cost)
    if colorless_matches:
        cmc += sum(int(amount) for amount in colorless_matches)

    return cmc, mana_counts

def extract_basic_card_info(input_file, output_prefix, chunk_size):
    try:
        # Leer el archivo completo
        with open(input_file, 'r', encoding='utf-8') as file:
            data = json.load(file)

        # Extraer las cartas sin clasificación por sets y solo las propiedades básicas
        all_cards = []
        for set_code, set_data in data["data"].items():
            for card in set_data.get("cards", []):
                card_info = {
                    "name": card.get("name"),
                    "type": card.get("type"),
                    "manaCost": card.get("manaCost"),
                    "text": card.get("text"),
                    "rarity": card.get("rarity"),
                    "power": card.get("power"),
                    "toughness": card.get("toughness"),
                    "loyalty": card.get("loyalty")
                }

                # Simplificar el mana cost a CMC y cantidad de mana por color
                mana_cost = card.get("manaCost", "")
                cmc, mana_counts = parse_mana_cost(mana_cost)
                card_info["cmc"] = cmc
                card_info["manaCounts"] = mana_counts

                all_cards.append(card_info)

        # Dividir las cartas en fragmentos
        total_chunks = (len(all_cards) + chunk_size - 1) // chunk_size
        for i in range(total_chunks):
            chunk = all_cards[i * chunk_size:(i + 1) * chunk_size]
            output_file = f"{output_prefix}_part{i + 1}.json"
            with open(output_file, 'w', encoding='utf-8') as chunk_file:
                json.dump(chunk, chunk_file, indent=2)
            print(f"Archivo guardado: {output_file}")

    except json.JSONDecodeError as e:
        print("Error al decodificar el JSON:", e)
    except Exception as e:
        print("Error general:", e)

if __name__ == "__main__":
    # Verifica los argumentos proporcionados
    if len(sys.argv) < 4:
        print("Uso: python extract_cards.py <input_file> <output_prefix> <chunk_size>")
        sys.exit(1)

    input_file = sys.argv[1]  # Archivo de entrada
    output_prefix = sys.argv[2]  # Prefijo para los archivos generados
    chunk_size = int(sys.argv[3])  # Número de cartas por archivo

    extract_basic_card_info(input_file, output_prefix, chunk_size)
