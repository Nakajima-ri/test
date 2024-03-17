function totalPrice(otona,kodomo){
    return "合計金額は" + (otona*500 + kodomo*200) +"円です。";
}

document.write(totalPrice(2,4));
document.write("<br>");
document.write(totalPrice(1,5));
document.write("<br>");
document.write(totalPrice(3,7));
