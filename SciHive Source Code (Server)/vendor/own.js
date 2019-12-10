  function goodscorexss(){

    var goodie = Math.floor(Math.random() * 11 );
    var goodness;

         if (goodie == 0) { goodness = "Nice!"}
    else if (goodie == 1) { goodness = "Cool!"}
    else if (goodie == 2) { goodness = "Correct!"}
    else if (goodie == 3) { goodness = "Awesome!"}
    else if (goodie == 4) { goodness = "Sweet!"}
    else if (goodie == 5) { goodness = "Brilliant!"}
    else if (goodie == 6) { goodness = "Excellent!"}
    else if (goodie == 7) { goodness = "Good!"}
    else if (goodie == 8) { goodness = "Yeah!"}
    else if (goodie == 9) { goodness = "Okay!"}
    else if (goodie == 10) { goodness = "Bright!"}
        else goodness = "ewan";


    swal({
            title: goodness,
            text: "Correct Answer",
            imageUrl: "media/right.png",
            showConfirmButton: false,
            timer: 1200
        })
  }











  function badscorexss(){

    var badie = Math.floor(Math.random() * 6 );
    var badness;

         if (badie == 0) { badness = "Ooops!"}
    else if (badie == 1) { badness = "Sorry!"}
    else if (badie == 2) { badness = "Uh-oh!"}
    else if (badie == 3) { badness = "Bad!"}
    else if (badie == 4) { badness = "Wrong!"}
    else if (badie == 5) { badness = "Miss!"}
        else badness = "ewan";

    swal({
            title: badness,
            text: "Incorrect Answer",
            imageUrl: "media/wrong.png",
            showConfirmButton: false,
            timer: 1200
        })
  }



