function maj1()
{f.nom.value=f.nom.value.toUpperCase();}
function maj2()
{f.prenom.value=f.prenom.value.toUpperCase();}
function alpha(ch)
{k="AZERTYUIOPQSDFGHJKLMWXCVBN0123456789";
r=true;
for(i=0;i<ch.length;i++)
if (k.indexOf(ch.charAt(i))==-1) r=false;
return r;
}
function verif() 

{ 
    n=f.nom.value;
    p=f.prenom.value;
    tel=f.telephone.value; 

if ((tel.length != 8 || isNaN(tel) )) {
    alert("num tel invalide");
    return false;
} 
if ((n=="")||(alpha(n)==false))
{alert("nom incorrecte "); return false;}
if ((p=="")||(alpha(p)==false))
{alert("prenom incorrecte "); return false;}

}
