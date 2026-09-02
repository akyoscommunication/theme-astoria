import gsap from 'gsap'

export class Shape {
  constructor () {
    this.elements = document.querySelectorAll('[animation-shape]')
    this.init()
  }

  init () {
    this.elements.forEach((el) => {
      gsap.fromTo(el, {
        scale: 0
      }, {
        scale: 1,
        duration: 1,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: el,
          start: 'top 90%',
          end: 'bottom 10%',

        }
      })
    })
  }
}
