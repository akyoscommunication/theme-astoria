import gsap from 'gsap'

export class Header {
  constructor() {
    this._header = document.querySelector('header')
    this._hero = document.querySelector('.s-hero')
    this._burger = document.querySelector('#burger')
    this._mobileMenu = document.querySelector('.header-nav__mobile')
    this._scrollValue = 0
    this._itemsWithChildren = document.querySelectorAll('.menu-item-has-children')

    if (this._hero) {
      this._heroHeight = this._hero.clientHeight
      this.scroll()
    }

    if (this._itemsWithChildren.length) {
      this._itemsWithChildren.forEach(item => {
        this.handleSubmenu(item)
      })
    }

    this._burger.addEventListener('click', this.handleBurger)

    if(window.innerWidth > 1024) {
      window.addEventListener('scroll', this.scroll)
    }
  }

  handleBurger = () => {
    this._mobileMenu.classList.toggle('is-active')
  }

  scroll = () => {
    let currentScrollValue = window.scrollY
    if (currentScrollValue > this._scrollValue) {
      this._header.classList.add('scrolled')
      gsap.to(this._header, {
        top: '-50px',
        duration: 0.2,
        ease: 'power2.out',
      })
    } else {
      this._header.classList.remove('scrolled')
      gsap.to(this._header, {
        top: '0',
        duration: 0.2,
        ease: 'power2.in',
      })
    }
  }

  handleSubmenu = (item) => {

    const submenu = item.querySelector('.sub-menu')
    const link = item.querySelector(':scope > a')
    const isMobile = /Mobi|Android/i.test(navigator.userAgent)

    const openAnimation = gsap.to(submenu, {
      height: 'auto',
      duration: 0.5,
      autoAlpha: 1,
      ease: 'power2.inOut',
      paused: true,
    })

    let clicked = false;

    link.addEventListener('click', (e) => {
      if (isMobile && !clicked) {
        e.preventDefault()
      }
      clicked = !clicked
    })

    item.addEventListener('mouseover', (e) => {
      openAnimation.play()
    })

    item.addEventListener('mouseleave', (e) => {
      openAnimation.reverse()
      clicked = false
    })

  }

}
