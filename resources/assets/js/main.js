import '@css/main.scss'
import '../../../vendor/akyos/akyos-access/resources/assets/js/toc.js'
import '@js/bootstrap'
import {Mask} from "@js/animations/Mask";
import {Slider} from "@js/utils/Slider";
import {Stagger} from "@js/animations/Stagger";
import {Wipe} from "@js/animations/Wipe";
import {Scroll} from "@js/animations/Scroll";
import {Header} from "@js/components/Header";
import {Lightbox} from "@js/components/Lightbox";
import {CountNumber} from "@js/components/CountNumber";
import {Translate} from "@js/animations/Translate";
import {Button} from '@js/utils/Button'
import {Shape} from '@js/animations/Shape'
import {Zoom} from '@js/animations/Zoom'
import {TextOverflow} from '@js/animations/TextOverflow'
import {Listener} from "./Listener";

window.onload = () => {

  const animations = [
    Mask,
    Stagger,
    Wipe,
    Scroll,
    Translate,
    Shape,
    Zoom,
    TextOverflow
  ]

  animations.forEach(animation => {
    new animation()
  })

  new Slider()
  new Header()
  new Lightbox()
  new CountNumber()
  new Button()
  new Listener()
}
