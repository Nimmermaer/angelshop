lib.mainmenu = HMENU
lib.mainmenu {
    special = directory
    special.value = {$global.homePageUid}

    1 = TMENU
    1 {
        expAll = 1
        noBlur = 1
        NO = 1
        NO {
            wrapItemAndSub = <li> |</li>
            wrapItemAndSub.insertData = 1
            linkWrap = <span>|</span>
            ATagBeforeWrap = 1
            stdWrap.htmlSpecialChars = 1
        }

        ACT < .NO
        ACT {
            wrapItemAndSub = <li class="active"> |</li>
        }

        IFSUB = 1
        IFSUB.wrapItemAndSub = <li class="dropdown">|</li>
        IFSUB.doNotLinkIt = 1
        IFSUB.allWrap = <a class="dropdown-toggle" data-toggle="dropdown" href="#" >|<b class="caret"></b></a>

        ACTIFSUB = 1
        ACTIFSUB.wrapItemAndSub = <li class="dropdown">|</li>
        ACTIFSUB.doNotLinkIt = 1
        ACTIFSUB.allWrap = <a class="dropdown-toggle" data-toggle="dropdown" href="#" >|<b class="caret"></b></a>
    }

    2 = TMENU
    2 {
        expAll = 1
        noBlur = 1
        NO = 1
        NO {
            allWrap = <li>|</li>
        }

        wrap = <ul class="dropdown-menu">|</ul>
    }
}


lib.datum = TEXT
lib.datum.data = date : U
lib.datum.strftime = %Y

lib.footermenu = HMENU
lib.footermenu {
    special = directory
    special.value = 11

    1 = TMENU
    1 {
        noBlur = 1
        NO = 1
        NO {
            wrapItemAndSub = <li>&nbsp;&#149;|</li>|*|<li>&nbsp;&#149;|</li>|*|<li class="last" >&nbsp;&#149;|</li>
            wrapItemAndSub.insertData = 1
            linkWrap = |
            ATagBeforeWrap = 1
            stdWrap.htmlSpecialChars = 1
        }

        ACT < .NO
        ACT {
            wrapItemAndSub = <li class="active " >&nbsp;&#149;|</li>|*|<li class="active" >&nbsp;&#149;|</li>|*|<li class="active last" >&nbsp;&#149;| </li>
        }
    }
}

lib.breadcrumb = HMENU
lib.breadcrumb {
    special = rootline
    special.range = 0|3
    entryLevel = 0
    wrap = <ol class="breadcrumb">|</ol>
    1 = TMENU
    1 {
        noBlur = 1
        NO {
            allWrap = <li> | </li>    |*| <li> | </li>     |*| <li> | </li>
            stdWrap.htmlSpecialChars = 1
        }
    }
}
