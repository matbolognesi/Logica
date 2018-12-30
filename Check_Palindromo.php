//Given the string, check if it is a palindrome.

function checkPalindrome($inputString) {
    if(strrev($inputString)==$inputString ){//Função para reverter strings
        return true;
    }
    else
        return false;

}
