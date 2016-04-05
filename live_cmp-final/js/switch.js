//variables to keep track of visible status of doc side list and category nav
var side_show_clicked = false;
var nav_drop_clicked = false;

// wait till doc is ready
$(document).ready(function(){

    // look for any click of a tag
    $( "body" ).on("touchstart click", "a", function(e) {

        // check which page we are currently on by looking at first div id
        var current = $("#main>div").attr('id');

       // alert(current);

        // storing alt of clicked a tag
		var doc_title = $(this).attr("alt");

        if ( doc_title !== "none" ) {
            e.stopPropagation(); e.preventDefault();
        }

        //alert(doc_title);

        // storing first three letters of alt string to determine if document or category
		var page = doc_title.substring(0,3);

        //store number after first three letters in alt string for use in determining which doc or cat to display. needes regex because it can be 2 digits or only 1
        var cat_counter_temp = doc_title.substring(3,5);
        var cat_counter = cat_counter_temp.replace(/[^0-9]/g, '');

        //checks is the link thats clicked is not to take it back to homepage, otherwise runs function to load pages and elements
        if(doc_title != "none"){
            loadPage(current,page,doc_title,cat_counter);
        }
    });

    // handler to show document side list
	$( "body" ).on("click", "#side_show", clickSideList);

    //handler to show category dropdown at certain width
	$( "body" ).on("click", "#cat_drop", clickNavDrop);

    //checks if window is above a certain width and displays nav element if it was hidden. eleminates problems that developed from media queries and the cat_drop element above.
    $( window ).resize(function() {
        if($( "body" ).width() <= 764 && !nav_drop_clicked){
            $( "#nav" ).css("display","none");
        }else if( $( "body" ).width() >= 764){
            $( "#nav" ).css("display","inline-block");
            nav_drop_clicked = false;
        }
    });


    // code to check mouse clicks when side menu or nav dropdown when it is displayed, and hide side menu or dropdown if the click is not in them **from stackoverflow, not mine-
    $(document).mouseup(function (e){

        // sees if nav drop or the button to display nav drop is displayed and was or was not clicked
        if ($( "body" ).width() <= 764 && nav_drop_clicked){
            var nav_drop = $("#nav");
            var nav_button = $("#cat_drop");
            if (!nav_drop.is(e.target) && nav_drop.has(e.target).length === 0 && !nav_button.is(e.target) && nav_button.has(e.target).length === 0){
                clickNavDrop();
            }
        }

        // sees if doc side list or the button to display doc side list is displayed and was or was not clicked
        if (side_show_clicked){
            var side_list = $("#document_side_list");
            var side_button = $("#side_show");
            if (!side_list.is(e.target) && side_list.has(e.target).length === 0 && !side_button.is(e.target) && side_button.has(e.target).length === 0){
                clickSideList();
            }
        }
    });
});

// determines which page/doc/cat to load based on current page conditions and clicked link
function loadPage(current,page,doc_title,cat_counter){

    // sees if we are on homepage
    if(current == "homepage_header"){

        // load category page and get the right category based on the clicked link
        if(page == "cat"){
            $("#main").load("includes/pages/category.html", function(){
                chooseCat(cat_counter);
            });
        }else{  // otherwise load the documents page and put in corresponding document in and get the right category side list
            $("#main").load("includes/pages/document.html", function(){
			     chooseDoc(doc_title);
			     chooseCat(cat_counter);
		    });
        }
    }else if(current == "category_placeholder"){ //sees if we are on category page
        if(page == "cat"){ //only load section of page if switching category, also see if nav dropdown needs to be hidden
                chooseCat(cat_counter);
                if(nav_drop_clicked){
                    clickNavDrop();
                }
        }else{ // otherwise load the documents page and put in corresponding document in and get the right category side list, also change nav dropdown state because it will be hidden on new doc page
            $("#main").load("includes/pages/document.html", function(){
			     chooseDoc(doc_title);
			     chooseCat(cat_counter);
                 nav_drop_clicked = false;
		    });
        }
    }else{ // otherwise we are on the document page
        if(page == "cat"){ //load category page and get corresponding category , also change nav dropdown state because it will be hidden on new cat page
            $("#main").load("includes/pages/category.html", function(){
                chooseCat(cat_counter);
                nav_drop_clicked = false;
            });
        }else{ // otherwise we are choosing a new document and only the document area needs to be reloaded, and side list if its in a new category
            chooseDoc(doc_title);
            chooseCat(cat_counter);
        }
    }
}

// loads transformed doc into document area of document template page, hides side list if it was displayed, animates to top of page *not my code, from stackoverflow
function chooseDoc(doc_title){
    $( "#document_area" ).load( "includes/documents/" + doc_title);
    $( "#document_area").ready(function(){
        if(side_show_clicked){
            clickSideList();
        }
    });
    $("html, body").animate({ scrollTop: 0 }, "slow");

    // only if you want to party, ALRIGHT ALRIGHT
    //alright();
}

// loads category into area depending on the document number or category link clicked
function chooseCat(cat_counter){
	if(cat_counter == 7 || cat_counter == 12 || cat_counter == 14 || cat_counter == 1){ // for the create documents and create category
        $( "#document_side_list" ).load( "includes/category/cat1.html");
        $( "#document_list" ).load( "includes/category/cat1.html");
	}else if(cat_counter == 2 || cat_counter == 5 || cat_counter == 8 || cat_counter == 9 || cat_counter == 13 || cat_counter == 10 || cat_counter == 15){ // for the process documents and process category
        $( "#document_side_list" ).load( "includes/category/cat2.html");
        $( "#document_list" ).load( "includes/category/cat2.html");
	}else{ // for the finish documents and finish category
        $( "#document_side_list" ).load( "includes/category/cat3.html");
        $( "#document_list" ).load( "includes/category/cat3.html");
    }
}

// checks if global variable is clicked or not and then calls function to close or open side list. allows me to call from any other function with no parameters
function clickSideList(){
    var savage = $("#side_show>svg");
    if(!side_show_clicked){
        side_show_clicked = openSideList(savage,side_show_clicked);
    }else{
        side_show_clicked = closeSideList(savage,side_show_clicked);
    }
}

// shows document side list on document pages, flips arrow on button, hides other menu if shown, and changes global clicked variable
function openSideList(savage,clicked){
    $( "#document_side_list" ).fadeIn( "fast" );
    savage.css("transform","scale(-1,1)");
    savage.css("padding","3px 12px");
    if(nav_drop_clicked){
        clickNavDrop();
    }
    return true;
}

//hides document side list on document pages, flips arrow on button, and changes global clicked variable
function closeSideList(savage,clicked){
    $( "#document_side_list" ).fadeOut( "fast" );
    savage.css("transform","scale(1,-1)");
    savage.css("padding","3px 15px");
    return false;
}

// checks if global variable is clicked or not and then calls function to close or open nav drop. allows me to call from any other function with no parameters
function clickNavDrop(){
    var nav_drop = $("#nav");
    if(!nav_drop_clicked){
        nav_drop_clicked = openNav(nav_drop,nav_drop_clicked);
    }else{
        nav_drop_clicked = closeNav(nav_drop,nav_drop_clicked);
    }
}

// shows nav category drop on document pages, hides other menu if shown, and changes global clicked variable
function openNav(nav_drop,clicked){
	$( "#nav" ).fadeIn( "fast" );
    $( "#nav" ).css("display","inline-block");
	if(side_show_clicked){
        clickSideList();
    }
    return true;
}

//hides nav category drop list on document pages, and changes global clicked variable
function closeNav(nav_drop,clicked){
	$( "#nav" ).fadeOut( "fast" );
    $( "#nav" ).css("display","inline-block");
	return false;
}

// see line 124 if you want to party ALRIGHT ALRIGHT
function alright(){
    var alright_clicked = "no";
    $("#main").append("<a href='#' id='alright' alt='none'>Alright Alright</a>");
    $("#alright").click(function() {
        if(alright_clicked != "yes"){
            console.log("alright alright ALRIGHT");
            $("body").append("<img id='ALRIGHTALRIGHTALRIGHT' src='https://resize.rbl.ms/image?source=https%3A%2F%2Fpbs.twimg.com%2Fmedia%2FB_liqqAUwAAe7tg.jpg%3Amedium&size=2000%2C2000&c=3noX%2FSPQwLIpBEyb' style='position:absolute;top: 0;max-width:100%;z-index:99;'>");
            alright_clicked = "yes";
        }else{
            $("#ALRIGHTALRIGHTALRIGHT").remove();
            alright_clicked = "no";
        }
    });
}
