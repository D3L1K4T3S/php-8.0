#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void){
    char buf[1000];
    char buf_cookie[1000];
    char *cook = getenv("HTTP_COOKIE");
    if(cook != NULL)
        strcpy(buf_cookie, cook + 5);
    char *query = getenv("QUERY_STRING");
    if(query != NULL){
        strcpy(buf,query + 5);
        printf("Set-cookie: cook=%s;" "expires=Thusday, 2-Feb-23 15:52:00 GMT\n", buf);
        strcpy(buf_cookie,buf);
    }
    printf("Content-type: text/html\n\n");
    printf("<!DOCTYPE html>\n");
    printf("<html lang='ru'>\n");
    printf("<head>");
    printf("<title>Простой сценарий, использующий cookies</title>\n");
    printf("<meta charset='utf-8'>\n");
    printf("</head>\n");
    printf("<body>\n\n");
    if(strlen(buf_cookie) > 0)
        printf("<h1> Привет, %s!</h1>\n",buf_cookie);
    printf("<form action='/cgi-bin/env.cgi' method='GET'>\n");
    printf("<p>Выше имя: ");
    printf("<input type='text' name='name' value='%s'></p>\n",buf_cookie);
    printf("<p><input type='submit' value='Отравить'></p>\n");
    printf("</form>\n");
    printf("</body>\n");
    printf("</html>\n");
}