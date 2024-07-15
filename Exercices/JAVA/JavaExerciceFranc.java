import java.util.Scanner;

public class JavaExerciceFranc {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        
        double francsSuisses, euros;
        final double tauxConversion = 1.06;
        
        System.out.println("Entrez le montant en francs suisses : ");
        francsSuisses = scanner.nextDouble();
        
        euros = francsSuisses * tauxConversion;
        
        // Affichage du résultat :
        System.out.println(String.format("%.2f", francsSuisses) + " francs suisses équivaut à " + String.format("%.2f", euros) + " euros.");
        
        scanner.close();
    }
}
