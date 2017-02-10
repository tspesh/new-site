// JavaScript Document

// Scripts written by YOURNAME @ YOURCOMPANY

/* jshint -W083 */

var menus        = document.querySelectorAll(".menu-list"),
    menu_items   = document.querySelectorAll(".menu-list_item"),
    menu_links   = document.querySelectorAll(".menu-list_link"),
    menu_toggles = document.querySelectorAll(".menu-list_toggle");

// handle touch away from menu-list elements
// @TODO make sure the touched menu-list is active
document.addEventListener("touchstart", function(e) {
    var parent_class_list = e.target.parentNode.classList;

    if (!(parent_class_list.contains("menu-list_item") && parent_class_list.contains("-parent") && parent_class_list.contains("is-active"))) {
        for (var i = 0; i < menu_items.length; i++) {
            mark_menu_item_inactive(menu_items[i]);
        }
    }
});

// handle interactions with menu-list_item elements
for (var i = 0; i < menu_items.length; i++) {
    // check if the menu is hoverable
    if (menu_items[i].parentElement.dataset.hover === "true") {
        // open on mouseover
        menu_items[i].addEventListener("mouseover", function() {
            mark_menu_item_siblings_inactive(this);
            mark_menu_item_active(this);
        });

        // close on mouseout
        menu_items[i].addEventListener("mouseout", function() {
            mark_menu_item_inactive(this);
        });
    }

    // check if the menu is touchable
    if (menu_items[i].parentElement.dataset.touch === "true") {
        // mark active on touch
        menu_items[i].addEventListener("touchstart", function(e) {
            // check if the element is already active
            if (this.classList.contains("-parent") && !this.classList.contains("is-active")) {
                e.preventDefault();
                mark_menu_item_siblings_inactive(this);
                mark_menu_item_active(this);
            }
        });
    }
}

// handle interactions with menu-list_link elements
for (var i = 0; i < menu_links.length; i++) {
    // mark inactive on blur (only if no other siblings or children are focused)
    menu_links[i].addEventListener("blur", function() {
        mark_menu_item_parent_inactive(this);
    });
}

// handle interactions with menu-list_toggle elements
for (var i = 0; i < menu_toggles.length; i++) {
    // mark active on click
    menu_toggles[i].addEventListener("click", function(e) {
        e.preventDefault();

        if (this.parentNode.classList.contains("is-active")) {
            mark_menu_item_inactive(this.parentNode);
        } else {
            mark_menu_item_active(this.parentNode);
        }
    });

    // mark inactive on blur (only if no other siblings or children are focused)
    menu_toggles[i].addEventListener("blur", function() {
        mark_menu_item_parent_inactive(this);
    });
}

// function to mark elements as inactive
// @param  {Element}  elem - An element to mark as inactive
// @TODO figure out how to close all children of each menu
function mark_menu_item_inactive(elem) {
    var children = elem.childNodes;

    elem.classList.remove("is-active");

    for (var i = 0; i < children.length; i++) {
        if (children[i].nodeType === 1 && children[i].hasAttribute("aria-hidden")) {
            children[i].setAttribute("aria-hidden", "true");
        }
    }
}

// function to mark parent elements as inactive
// @param  {Element}  elem - An element to mark parents inactive
function mark_menu_item_parent_inactive(elem) {
    var parent = elem.parentNode;

    setTimeout(function() {
        while (parent && parent.nodeType === 1 && !parent.classList.contains("menu-list_container")) {
            if (parent.classList.contains("is-active") && !parent.contains(document.activeElement)) {
                mark_menu_item_inactive(parent);
            }

            parent = parent.parentNode;
        }
    }, 10);
}

// function to mark sibling elements as inactive
// @param  {Element}  elem - An element to mark siblings inactive
function mark_menu_item_siblings_inactive(elem) {
    var siblings = elem.parentNode.childNodes;

    // mark all siblings as inactive
    for (var i = 0; i < siblings.length; i++) {
        if (siblings[i].nodeType === 1) mark_menu_item_inactive(siblings[i]);
    }
}

// function to mark elements as active
// @param  {Element}  elem - An element to mark as active
function mark_menu_item_active(elem) {
    var children = elem.childNodes;

    elem.classList.add("is-active");

    for (var i = 0; i < children.length; i++) {
        if (children[i].nodeType === 1 && children[i].hasAttribute("aria-hidden")) {
            children[i].setAttribute("aria-hidden", "false");
        }
    }
}