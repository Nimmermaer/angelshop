lib {
    mainmenu = HMENU
    mainmenu {
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
            ACTIFSUB.wrapItemAndSub = <li class="active dropdown">|</li>
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
                stdWrap.cObject = COA
                stdWrap.cObject {
                    10 = TEXT
                    10.field = title
                    15 = TEXT
                    15.value = &nbsp;
                    20 = TEXT
                    20.field = subtitle
                }
            }
            ACT < .NO
            ACT {
                allWrap = <li class="active"> | </li>
            }
            wrap = <ul class="dropdown-menu">|</ul>
        }
    }

    datum = TEXT
    datum.data = date : U
    datum.strftime = %Y

    footermenu = HMENU
    footermenu {
        special = directory
        special.value = {$global.navigation.footerStartPoint}

        1 = TMENU
        1 {
            noBlur = 1
            NO = 1
            NO {
                wrapItemAndSub = <li>&#149;&nbsp;|&nbsp;&#149;&nbsp;</li>|*|<li>|&nbsp;&#149;&nbsp;</li>|*|<li class="last" >|</li>
                wrapItemAndSub.insertData = 1
                linkWrap = |
                ATagBeforeWrap = 1
                stdWrap.htmlSpecialChars = 1
            }

            ACT < .NO
            ACT {
                wrapItemAndSub = <li class="active " > | &nbsp;&#149;  </li>|*|<li class="active" >|&nbsp;&#149;</li>|*|<li class="active last" >&nbsp;| </li>
            }
        }
    }

    breadcrumb = HMENU
    breadcrumb {
        special = rootline
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
}