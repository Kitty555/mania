function _header() {
    var h = document.getElementById("g_searchbar_form");
    if(h !== null) {
        var c = h.querySelector('[name="search_game"]');
        var g = h.querySelector('[name="search_server"]');
        var d = h.getElementsByClassName("g_search_frame")[0];
        new GameServerList(h.querySelector('[data-gslist="true"]'), {
            formElement: h,
            containerWrapper: d,
            toggleContainer: d.getElementsByClassName("initial_screen")[0],
            game: {
                gameCode: c.value
            },
            server: {
                updownIndex: 2,
                use: true,
                gameCode: c.value,
                serverCode: g.value,
                onCustomChange: function() {
                    if(c.value.isEmpty() === true && g.value.isEmpty() === true) {
                        return
                    }
                    if(this.goodsCode !== undefined) {
                        h.querySelector('[name="search_goods"]').value = this.goodsCode
                    } else {
                        h.querySelector('[name="search_goods"]').value = ""
                    }
                    var l = (g.value === "0") ? "list.html" : "list_search.html";
                    var k = h.querySelector('[name="search_type"]:checked').value;
                    var m = "//trade.itemmania.com/" + k + "/" + l;
                    h.action = m;
                    _myService.setLastSearch();
                    h.submit()
                }
            }
        })
    }
    var j = document.getElementById("quickmenu_dtl");
    if(j !== null) {
        var i;
        var e = document.getElementById("quickmenu_area");
        var b = document.getElementById("quickmenu");
        document.getElementById("quickmenu_close").addEventListener("click", function() {
            e.classList.remove("qickmenu_on");
            $(b).addClass("close");
            $(b).children().removeClass("on")
        });
        $(b).find("li").click(function() {
            var k = $(this).find("a").attr("data-type");
            if(k) {
                var l = e.classList.contains("qickmenu_on");
                if(l === true && i === k) {
                    e.classList.remove("qickmenu_on");
                    $(b).addClass("close");
                    $(b).children().removeClass("on");
                    return
                }
                if(l === false) {
                    e.classList.add("qickmenu_on");
                    $(b).removeClass("close");
                    $(b).children().eq(0).addClass("on")
                }
                $(b).children().removeClass("on");
                $(this).addClass("on");
                i = k;
                ajaxRequest({
                    url: "/_include/quicklink" + i.split("_")[0] + ".php",
                    type: "POST",
                    async: false,
                    success: function(m) {
                        document.getElementById("quickmenu_cont").innerHTML = "" + m
                    }
                })
            }
        })
    }
    if(document.getElementById("all_menu") !== null) {
        $("#all_menu").on("click", function() {
            ajaxRequest({
                url: "/html/sitemap.html",
                dataType: "html",
                success: function(k) {
                    $("#all_menu_layer").find(".inner").append(k);
                    $("#all_menu").off("click")
                }
            })
        });
        LayerControl({
            el: document.getElementById("all_menu"),
            layer: document.getElementById("all_menu_layer"),
            close_btn: document.getElementById("menu_close"),
            type: "style"
        })
    }
    if($("#direct_icon").length > 0) {
        if($("#g_FAVORITE").length > 0) {
            $("#g_FAVORITE").css("cursor", "pointer");
            $("#g_FAVORITE").click(function() {
                var l = "http://www.itemmania.com/counter/survey.php?imcounter=dot_bookmark_com&returnUrl=" + encodeURIComponent("http://www.itemmania.com");
                var k = "NO.1 ??????????????????????????????????????????";
                try {
                    if(window.sidebar && window.sidebar.addPanel) {
                        window.sidebar.addPanel(k, l, "")
                    } else {
                        if(window.external) {
                            window.external.AddFavorite(l, k)
                        } else {
                            alert("Ctrl+D????????????? ?????????????????????????? ??????????????????????????????? ???????????????????????????? ?????? ??????????????????????????.")
                        }
                    }
                } catch(m) {
                    alert("Ctrl+D????????????? ?????????????????????????? ??????????????????????????????? ???????????????????????????? ?????? ??????????????????????????.")
                }
            })
        }
        if($("#g_STARTPAGE").length > 0) {
            $("#g_STARTPAGE").click(function() {
                if(document.all) {
                    document.body.style.behavior = "url(#default#homepage)";
                    document.body.setHomePage("http://www.itemmania.com/counter/survey.php?imcounter=dot_start_com&returnUrl=" + encodeURIComponent("http://www.itemmania.com"))
                } else {
                    if(window.sidebar) {
                        if(window.netscape) {
                            try {
                                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect")
                            } catch(l) {
                                alert("???????????????????????????? ?????????????? ???????????????????? ????????????????????????.")
                            }
                        }
                        var k = Components.classes["@mozilla.org/preferences-service;1"].getService(Components.interfaces.nsIPrefBranch);
                        k.setCharPref("browser.satrip.homepage", url)
                    } else {
                        alert("???????????????????????????? ?????????????? ???????????????????? ????????????????????????.")
                    }
                }
            })
        }
    }
    if(document.getElementById("top_btn") !== null) {
        document.getElementById("top_btn").addEventListener("click", function() {
            var k = (document.documentElement || document.body);
            k.scrollTop = 0
        })
    }
    if(document.getElementById("alarm_noti") !== null) {
        var f = document.getElementById("alarm_noti");
        ajaxRequest({
            url: "/myroom/goods_alarm/_ajax_process.php",
            type: "post",
            dataType: "json",
            data: {
                mode: "new"
            },
            async: false,
            success: function(k) {
                if(k.DAT == "Y") {
                    f.querySelector(".new_alarm").classList.add("on")
                } else {
                    f.querySelector(".new_alarm").classList.remove("on")
                }
            },
            error: function(k) {
                alert("???????????????????????????? ?? ???????????????? ???????????????????????????? ???????????????????????????.\n???? ??????????????? ?????????????? ?????????????????????????????????????????." + k.message);
                return
            }
        })
    }
    if(document.getElementById("dialog_close") !== null) {
        var a = document.getElementById("dialog_close");
        a.addEventListener("click", function() {
            dialogAction(function() {
                a.parentNode.style.display = "none"
            })
        })
    }
    if(document.getElementById("dialog_move") !== null) {
        document.getElementById("dialog_move").addEventListener("click", function() {
            dialogAction(function() {
                location.href = "/myroom/goods_alarm/alarm_sell_list.html"
            })
        })
    }
}

function searchbarSubmit() {
    var f = document.getElementById("g_searchbar_form");
    var h = f.querySelector('[name="search_game"]');
    var c = f.querySelector('[name="search_server"]');
    var a = h.value;
    var g = c.value;
    var b = f.querySelector('[name="search_type"]:checked').value;
    var d = (g === "0" || g === "") ? "list.html" : "list_search.html";
    var e = "//trade.itemmania.com/" + b + "/" + d;
    if(a.isEmpty()) {
        alert("???????????????????? ????? ?????????????????????????????????.");
        return false
    } else {
        _myService.setLastSearch()
    }
    f.action = e;
    return true
}

function dialogAction(a) {
    ajaxRequest({
        url: "/myroom/goods_alarm/_ajax_process.php",
        type: "post",
        dataType: "json",
        data: {
            mode: "new_layer"
        },
        async: false,
        success: function(b) {
            a()
        },
        error: function(b) {
            alert("???????????????????????????? ?? ???????????????? ???????????????????????????? ???????????????????????????.\n???? ??????????????? ?????????????? ?????????????????????????????????????????." + b.message);
            return
        }
    })
};
