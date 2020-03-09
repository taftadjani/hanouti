function searchClicked(name) {
    var header = document.getElementById("header");
    var search_ul = document.getElementById("search-ul");
    var search_btn = document.getElementById("search");
    var search_clear = document.getElementById("clearsearch");
    var search_txt = document.getElementById("search-text");
    var form_search = document.getElementById("formsearch");
    var form_ul_li = document.getElementById("search-ul-li");

    var elements = header.getElementsByClassName("searchclick");
    var elementsform = header.getElementsByClassName("searchform");

    if (name === 'search') {

        //! Hide / Show elements
        for (let i = 0; i < elements.length; i++) {
            const elt = elements[i];
            elt.style.display = 'none';
        }

        //! Change with of search
        search_ul.style.width = "100%";
        form_search.style.width = "100%";
        form_ul_li.style.width = "100%";
        search_txt.style.width = "100%";

        for (let i = 0; i < elementsform.length; i++) {
            elementsform[i].style.display = "block";
        }
        search_btn.style.display = 'none';
        search_clear.style.display = 'block';

    } else {
        //! Hide / Show elements
        for (let i = 0; i < elements.length; i++) {
            const elt = elements[i];
            elt.style.display = 'flex';
        }

        //! Change with of search
        search_ul.style.width = "initial";
        form_ul_li.style.width = "initial";
        for (let i = 0; i < elementsform.length; i++) {
            elementsform[i].style.display = "none";
        }
        search_btn.style.display = 'block';
        search_clear.style.display = 'none';
    }
}