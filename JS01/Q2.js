for (i = 1; i <= 100; i++) {
    if (i % 3 == 0)
        if (i % 5 == 0)
            console.log(i + " opensense");
        else
            console.log(i + " open")
    else if (i % 5 == 0)
        console.log(i + " sense");
    else
        console.log(i)
}