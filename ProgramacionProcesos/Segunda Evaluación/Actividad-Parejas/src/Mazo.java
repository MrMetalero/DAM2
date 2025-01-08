import java.util.ArrayList;

public class Mazo {
    private String nombre;
    private ArrayList<Carta> mazo = new ArrayList<>();
    private double precio;
    
    public Mazo() {}

    public Mazo(String nombre, ArrayList<Carta> mazo, double precio) {
        this.nombre = nombre;
        this.mazo = mazo;
        this.precio = precio;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {

        this.nombre = nombre;
    }

    public ArrayList<Carta> getMazo() {
        return mazo;
    }

    public void setMazo(ArrayList<Carta> mazo) {
        this.mazo = mazo;
    }

    public double getPrecio() {
        return precio;
    }

    public void setPrecio(double precio) {
        this.precio = precio;
    }

    public Mazo generarMazoLifeStealth(){
        ArrayList<Carta> mazoLifeStealth = new ArrayList<>();
        mazoLifeStealth.add(new Carta(1, "Bloodthirsty Conqueror"));
        mazoLifeStealth.add(new Carta(1, "Dina, Soul Steeper"));
        mazoLifeStealth.add(new Carta(1, "Elenda, Saint of Dusk"));
        mazoLifeStealth.add(new Carta(1, "Epicure of Blood"));
        mazoLifeStealth.add(new Carta(1, "Extraction Specialist"));
        mazoLifeStealth.add(new Carta(1, "Inspiring Overseer"));
        mazoLifeStealth.add(new Carta(1, "Marauding Blight-Priest"));
        mazoLifeStealth.add(new Carta(1, "Meriadoc Brandybuck"));
        mazoLifeStealth.add(new Carta(2, "Mirkwood Bats"));
        mazoLifeStealth.add(new Carta(1, "Resplendent Angel"));
        mazoLifeStealth.add(new Carta(1, "Samwise the Stouthearted"));
        mazoLifeStealth.add(new Carta(1, "Stromkirk Bloodthief"));
        mazoLifeStealth.add(new Carta(1, "Suture Priest"));
        mazoLifeStealth.add(new Carta(1, "Voracious Fell Beast"));
        mazoLifeStealth.add(new Carta(2, "Lembas"));
        mazoLifeStealth.add(new Carta(1, "Luxa River Shrine"));
        mazoLifeStealth.add(new Carta(1, "Pristine Talisman"));
        mazoLifeStealth.add(new Carta(1, "Selesnya Locket"));
        mazoLifeStealth.add(new Carta(1, "Bake into a Pie"));
        mazoLifeStealth.add(new Carta(1, "Hobbit's Sting"));
        mazoLifeStealth.add(new Carta(1, "Path to Exile"));
        mazoLifeStealth.add(new Carta(1, "Renewed Faith"));
        mazoLifeStealth.add(new Carta(1, "Elven Farsight"));
        mazoLifeStealth.add(new Carta(2, "Many Partings"));
        mazoLifeStealth.add(new Carta(2, "Revive the Shire"));
        mazoLifeStealth.add(new Carta(1, "Annointed Procession"));
        mazoLifeStealth.add(new Carta(1, "Gonti's Machinations"));
        mazoLifeStealth.add(new Carta(1, "Nahiri's Machinations"));
        mazoLifeStealth.add(new Carta(1, "Oath of the Grey Host"));
        mazoLifeStealth.add(new Carta(1, "Phyrexian Arena"));
        mazoLifeStealth.add(new Carta(1, "Stronghold Arena"));
        mazoLifeStealth.add(new Carta(1, "Tale of Tinúviel"));
        mazoLifeStealth.add(new Carta(1, "The Aesir Escape Valhalla"));
        mazoLifeStealth.add(new Carta(1, "Botanical Plaza"));
        mazoLifeStealth.add(new Carta(8, "Forest"));
        mazoLifeStealth.add(new Carta(2, "Jungle Hollow"));
        mazoLifeStealth.add(new Carta(9, "Plains"));
        mazoLifeStealth.add(new Carta(1, "Shire Terrace"));
        mazoLifeStealth.add(new Carta(2, "Swamp"));
        Mazo mazoLife = new Mazo("Mazo Life Stealth", mazoLifeStealth, 53.6);
        return mazoLife;
    }

    public Mazo generarMazoCounters(){
        ArrayList<Carta> mazoCounters = new ArrayList<>();
        mazoCounters.add(new Carta(1, "Falco Spara, Pactweaver"));
        mazoCounters.add(new Carta(1, "Ajani, Valiant Protector"));
        mazoCounters.add(new Carta(1, "Abzan Battle Priest"));
        mazoCounters.add(new Carta(1, "Alharu, Solemn Ritualist"));
        mazoCounters.add(new Carta(1, "Armorcraft Judge"));
        mazoCounters.add(new Carta(1, "Ascendant Packleader"));
        mazoCounters.add(new Carta(1, "Crystal Barricade"));
        mazoCounters.add(new Carta(1, "Deeproot Wayfinder"));
        mazoCounters.add(new Carta(1, "Deepwood Denizen"));
        mazoCounters.add(new Carta(1, "Elite Scaleguard"));
        mazoCounters.add(new Carta(1, "Felidar Savior"));
        mazoCounters.add(new Carta(1, "Gnarlid Colony"));
        mazoCounters.add(new Carta(1, "Goldberry, River-Daughter"));
        mazoCounters.add(new Carta(1, "Guardian Scalelord"));
        mazoCounters.add(new Carta(1, "Gyre Sage"));
        mazoCounters.add(new Carta(1, "Inspiring Paladin"));
        mazoCounters.add(new Carta(1, "Ivy Lane Denizen"));
        mazoCounters.add(new Carta(1, "Kalonian Hydra"));
        mazoCounters.add(new Carta(1, "Kami of Whispered Hopes"));
        mazoCounters.add(new Carta(1, "Llanowar Elves"));
        mazoCounters.add(new Carta(1, "Managorger Hydra"));
        mazoCounters.add(new Carta(1, "Nessian Horbeetle"));
        mazoCounters.add(new Carta(1, "Pridemalkin"));
        mazoCounters.add(new Carta(1, "Quirion Beastcaller"));
        mazoCounters.add(new Carta(1, "Renata, Called to the Hunt"));
        mazoCounters.add(new Carta(1, "Rishkar, Peema Renegade"));
        mazoCounters.add(new Carta(1, "Samwise, the Stouthearted"));
        mazoCounters.add(new Carta(1, "Scavenging Ooze"));
        mazoCounters.add(new Carta(1, "Slurrk, All-Ingesting"));
        mazoCounters.add(new Carta(1, "Sunscorch Regent"));
        mazoCounters.add(new Carta(1, "Three Tree Rootweaver"));
        mazoCounters.add(new Carta(1, "Treetop Snarespinner"));
        mazoCounters.add(new Carta(1, "Vorinclex // The Grand Evolution"));
        mazoCounters.add(new Carta(1, "Wilson, Refined Grizzly"));
        mazoCounters.add(new Carta(1, "Zimone, Paradox Sculptor"));
        mazoCounters.add(new Carta(1, "Implement of Ferocity"));
        mazoCounters.add(new Carta(1, "Obelisk of Bant"));
        mazoCounters.add(new Carta(1, "Ozolith, the Shattered Spire"));
        mazoCounters.add(new Carta(1, "Dispel"));
        mazoCounters.add(new Carta(1, "Dromoka's Command"));
        mazoCounters.add(new Carta(1, "Entish Restoration"));
        mazoCounters.add(new Carta(1, "Hindervines"));
        mazoCounters.add(new Carta(1, "Inscription of Abundance"));
        mazoCounters.add(new Carta(1, "Inspiring Call"));
        mazoCounters.add(new Carta(1, "Path to Exile"));
        mazoCounters.add(new Carta(1, "Rite of Harmony"));
        mazoCounters.add(new Carta(1, "Snakeskin Veil"));
        mazoCounters.add(new Carta(1, "Surge of Salvation"));
        mazoCounters.add(new Carta(1, "Tail Swipe"));
        mazoCounters.add(new Carta(1, "Take Up the Shield"));
        mazoCounters.add(new Carta(1, "Titanic Brawl"));
        mazoCounters.add(new Carta(1, "Atraxa's Fall"));
        mazoCounters.add(new Carta(1, "Austere Command"));
        mazoCounters.add(new Carta(1, "Broken Bond"));
        mazoCounters.add(new Carta(1, "Grow from the Ashes"));
        mazoCounters.add(new Carta(1, "Monstrous Emergence"));
        mazoCounters.add(new Carta(1, "Prey Upon"));
        mazoCounters.add(new Carta(1, "Titania's Command"));
        mazoCounters.add(new Carta(1, "Under the Skin"));
        mazoCounters.add(new Carta(1, "Undercity Upheaval"));
        mazoCounters.add(new Carta(1, "What Must Be Done"));
        mazoCounters.add(new Carta(1, "Ajani's Aid"));
        mazoCounters.add(new Carta(1, "Bottomless Pool // Locker Room"));
        mazoCounters.add(new Carta(1, "Garruk's Uprising"));
        mazoCounters.add(new Carta(1, "Long List of the Ents"));
        mazoCounters.add(new Carta(1, "Surgical Suite // Hospital Room"));
        mazoCounters.add(new Carta(1, "Tribute to the World Tree"));
        mazoCounters.add(new Carta(1, "Unbridled Growth"));
        mazoCounters.add(new Carta(1, "Canopy Vista"));
        mazoCounters.add(new Carta(1, "Evolving Wilds"));
        mazoCounters.add(new Carta(12, "Forest"));
        mazoCounters.add(new Carta(1, "Fortified Village"));
        mazoCounters.add(new Carta(1, "Gavony Township"));
        mazoCounters.add(new Carta(4, "Island"));
        mazoCounters.add(new Carta(1, "Mosswort Bridge"));
        mazoCounters.add(new Carta(7, "Plains"));
        mazoCounters.add(new Carta(1, "Port Town"));
        mazoCounters.add(new Carta(1, "Temple of Plenty"));
        mazoCounters.add(new Carta(1, "Terramorphic Expanse"));
        mazoCounters.add(new Carta(1, "The Hunter Maze"));
        Mazo mazoLife = new Mazo("Mazo Counters", mazoCounters, 67.4);
        return mazoLife;
    }
}
