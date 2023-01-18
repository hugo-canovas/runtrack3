function tri(numbers, order){

    if(order == "asc"){
        numbers.sort((a,b) => a - b);
        console.log(numbers);  
    }else if(order == "desc"){
        numbers.sort((a,b) => a - b).reverse();
        console.log(numbers); 
    }
    
}

tri(numbers=[2, 45, 50, 10, 5], "asc");
