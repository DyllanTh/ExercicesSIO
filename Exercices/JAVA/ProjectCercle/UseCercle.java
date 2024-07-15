package ProjectCercle;
import java.util.Scanner;
public class UseCercle {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Entrez la coordonnée x du cercle : ");
        float x = scanner.nextFloat();
        System.out.print("Entrez la coordonnée y du cercle : ");
        float y = scanner.nextFloat();
        System.out.print("Entrez le rayon du cercle : ");
        float rayon = scanner.nextFloat();

        Cercle cercle = new Cercle(x, y, rayon);

        System.out.println("Cercle créé avec succès !");

        System.out.print("Entrez le déplacement en x : ");
        float deplacementX = scanner.nextFloat();
        System.out.print("Entrez le déplacement en y : ");
        float deplacementY = scanner.nextFloat();

        cercle.deplacer(deplacementX, deplacementY);
        System.out.println("Cercle déplacé avec succès !");

        System.out.print("Entrez le facteur d'agrandissement : ");
        float facteur = scanner.nextFloat();
        cercle.agrandir(facteur);
        System.out.println("Cercle agrandi avec succès !");
        cercle.afficher();

        System.out.println("Le périmètre du cercle est : " + cercle.perimetre());

        scanner.close();
    }
}
