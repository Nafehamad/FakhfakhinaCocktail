Arrayi = new Array();
Arrayp = new Array();
i=0;

function  f(h,x)
{

    Arrayi[i]=h;
    Arrayp[i]=x;

    i++;
    alert(Arrayp);


}

function f1() {

    document.write("</br>");
    document.write("</br>");
    document.write("</br>");
    document.write("<h1><p align='center'>YOUR BILL</p></h1>");
    document.write("<table border='0' align='center' BGCOLOR='#e9967a'>");
    document.write("<tr>");

    document.write("<td>");

    document.write("<input type='text'  value='Discription'>");

    document.write("</td>");
    document.write("<td>");
    document.write("<input type='text'  value='Amount'>");
    document.write("</td>");
    document.write("<td>");
    document.write("<input type='text'  value='Price'>");
    document.write("</td>");

    document.write("<table border='0' align='center' BGCOLOR='#e9967a'>");
    for(i=0;i<Arrayp.length;i++) {
        document.write("<tr>");
        document.write("<td>");

        document.write("<input type='text'  value=" + Arrayi[i] + ">");

        document.write("</td>");
        document.write("<td>");
        document.write("<input type='number' value='1' min='0' >");
        document.write("</td>");
        document.write("<td>");
        document.write("<input type='text' value=" + Arrayp[i] + " >");
        document.write("</td>");


    }

    document.write("</tr>");
    document.write("</table>");
}
