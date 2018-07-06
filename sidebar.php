.sidenav {
	height: 100%;
    width: 160px; /* Set the width of the sidebar */
    position: fixed; /* Fixed Sidebar (stay in place on scroll) */
    z-index: 1; /* Stay on top */
    top: 0;
    left: 0;
    bottom: 0;
    background-color: #262626; /* Black */
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 150px;
}

/* The navigation menu links */
.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #f2f2f2;
    display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #808080;
}

/* Style page content */
.main {
    margin-left: 180px; /* Same as the width of the sidebar */
    padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}