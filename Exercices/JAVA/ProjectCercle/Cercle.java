package ProjectCercle;
public class Cercle {
    private float x;
    private float y;
    private float rayon;

    public Cercle(float x, float y, float rayon) {
        this.x = x;
        this.y = y;
        this.rayon = rayon;
    }

    public void deplacer(float deplacementX, float deplacementY) {
        this.x += deplacementX;
        this.y += deplacementY;
    }

    public void agrandir(float facteur) {
        this.rayon *= facteur;
    }

    public float perimetre() {
        return 2 * (float) Math.PI * rayon;
    }

    public void afficher() {
        System.out.println("Rayon: " + rayon);
        System.out.println("Position: (" + x + ", " + y + ")");
    }
}

