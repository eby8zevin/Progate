import java.util.Scanner;

class Main {
  public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);
    
    System.out.print("Nama Depan: ");
    // Masukkan nilai string
    String firstName = scanner.next();
    
    System.out.print("Nama Belakang: ");
    // Masukkan nilai string
    String lastName = scanner.next();
    
    System.out.print("Umur: ");
    // Masukkan nilai integer
    int age = scanner.nextInt();
    
    System.out.print("Tinggi (m): ");
    // Masukkan nilai desimal
    double height = scanner.nextDouble();
    
    System.out.print("Berat (kg): ");
    // Masukkan nilai desimal
    double weight = scanner.nextDouble();
    
    Person.printData(Person.fullName(firstName, lastName), age, height, weight);
  }
}

class Person {
  public static void printData(String name, int age, double height, double weight) {
    System.out.println("Nama saya adalah " + name + ".");
    System.out.println("Saya berusia " + age + " tahun.");
    System.out.println("Tinggi saya adalah " + height + " meter.");
    System.out.println("Berat saya adalah " + weight + " kilogram.");
    double bmi = bmi(height, weight);
    System.out.println("BMI saya adalah " + Math.round(bmi) + ".");

    if (isHealthy(bmi)) {
      System.out.println("BMI Anda berada dalam kisaran standar.");
    } else {
      System.out.println("BMI Anda berada di luar kisaran standar.");
    }
  }

  public static String fullName(String firstName, String lastName) {
    return firstName + " " + lastName;
  }

  public static String fullName(String firstName, String middleName, String lastName) {
    return firstName + " " + middleName + " " + lastName;
  }
  
  public static double bmi(double height, double weight) {
    return weight / height / height;
  }
  
  public static boolean isHealthy(double bmi) {
    return bmi >= 18.5 && bmi < 25.0;
  }
}
