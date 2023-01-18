function bissextile(year){
    if(((year & 3) == 0) && ((year % 100 != 0) || (year % 400 == 0))){
        return true;
    }else{
        return false;
    }
    
}
console.log(bissextile(2020));

