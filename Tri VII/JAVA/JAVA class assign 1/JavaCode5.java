public class JavaCode5 {
    public static void main(String[] args){
        int num = 5, fact = 1;

        for(int i = 1 ; i <= num ; i++)
            fact = fact*i;
        
        System.out.println("Factorial of " + num + " is " + fact);

    }
}
