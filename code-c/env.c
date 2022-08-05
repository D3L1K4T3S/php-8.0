#include <stdio.h>
#include <stdlib.h>

int main(void){
    char *rempote_addr = getenv("REMOTE_ADDR");
    char *querry_string = getenv("QUERY_STRING");
    printf("Content-type: text/html\n\n");

    printf("<!DOCTYPE html>");
    printf("<html lang ='ru'>");
    printf("<head>");
    printf("<title> Работа с переменными окружения </title>");
    printf("<meta charset='utf-8'>");
    printf("</head>");
    printf("<body>");
    printf("<h1>Здравствуйте. Мы знаем о Вас все!</h1>");
    printf("<p>Ващ IP-адрес: %s</p>", rempote_addr);
    printf("<p>Вот параметры, которые Вы указали: %s</p>", querry_string);
    printf("</body>");
    printf("</html");
}