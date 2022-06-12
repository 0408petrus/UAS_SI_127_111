function hitung()
{
    var bil1=parseFloat (document.tform.kuis.value);
    if (isNaN(bil1))
        bil1=0.0;
    var bil2=parseFloat (document.tform.tugas.value);
    if (isNaN(bil2))
        bil2=0.0;
    var bil3=parseFloat (document.tform.uts.value);
    if (isNaN(bil3))
        bil3=0.0;
    var bil4=parseFloat (document.tform.uas.value);
    if (isNaN(bil4))
        bil4=0.0;
    var ip      = "";
    var ket     = "";
    var Nilai=(((bil1*10)/100) + ((20*bil2)/100) + ((30*bil3)/100)+((40*bil4)/100))
    if((Nilai > 80) && (Nilai <=100))
        {

        ip="A";
        ket="Anda LULUS"; 
        }
        else if ((Nilai > 69) && (Nilai<=80))
        {
        ip="B";
        ket=" Anda LULUS";
        }
        else if ((Nilai > 55) && (na<=69))
        {
        ip="C";
        ket="Anda LULUS";
        }
        else if ((na > 38) && (na<=55))
        {
        ip="D";
        ket="Anda TIDAK LULUS";
        }
        else
        {
        ip="E";
        ket="Anda TIDAK LULUS";
        } 
        document.tform.ipk.value=ip;
        document.tform.ket.value=ket;
}