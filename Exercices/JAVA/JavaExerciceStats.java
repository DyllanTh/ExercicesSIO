import java.util.Scanner;

public class JavaExerciceStats {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        
        // Entrées utilisateur pour les débits :
        System.out.println("Veuillez entrer le nombre de débits effectués par Carte Bleue : ");
        int debitsCarteBleue = scanner.nextInt();
        
        System.out.println("Veuillez entrer le nombre de débits effectués par chèque : ");
        int debitsCheque = scanner.nextInt();
        
        System.out.println("Veuillez entrer le nombre de débits effectués par virement : ");
        int debitsVirement = scanner.nextInt();
        
        
        // Calcul du total des paiements :
        int totalPaiements = debitsCarteBleue + debitsCheque + debitsVirement;
        

        // Affichage du nombre total de paiements :
        System.out.println("Le nombre total de paiements est de : " + totalPaiements);
        

        // Calcul des pourcentages :
        double pourcentageCarteBleue = (debitsCarteBleue * 100.0) / totalPaiements;
        double pourcentageCheque = (debitsCheque * 100.0) / totalPaiements;
        double pourcentageVirement = (debitsVirement * 100.0) / totalPaiements;
        

        // Affichage des pourcentages :
        System.out.println("Voici le pourcentage d'utilisation de votre Carte Bleue : " + String.format("%.2f%%", pourcentageCarteBleue));
        System.out.println("Pour le chèque, le taux d'utilisation s'élève à : " + String.format("%.2f%%", pourcentageCheque));
        System.out.println("En ce qui concerne le virement, son pourcentage d'utilisation atteint : " + String.format("%.2f%%", pourcentageVirement));
        
        scanner.close();
    }
}
