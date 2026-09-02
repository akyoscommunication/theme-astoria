import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
export class Zoom {
  constructor() {
    this._elements = document.querySelectorAll('[animation-zoom]');
    this.init();
  }

  init() {
    gsap.registerPlugin(ScrollTrigger);

    this._elements.forEach((el) => {
      gsap.to(el, {
        scrollTrigger: {
          trigger: el,
          start: 'top 80%',
          end: 'bottom 10%',
          scrub: true,
          onEnter: (e) => {
            this.enterAnimation(e)
          }
        }
      });
    })
  }

  enterAnimation(e) {
    let target = e.trigger
    const type = target.getAttribute('animation-zoom')
    target.classList.add('animation-zoom-'+ type +'--active')
  }
}
