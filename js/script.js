const about = document.querySelector('#aboutlink');
const contact = document.querySelector('#contactlink');
const aboutContent = document.querySelector('#aboutContents');
const contactContent = document.querySelector('#contactContents');

about.addEventListener('click', () => {
    if(window.innerWidth < 768) {
        const aboutBox = new WinBox({
            title: "About Me",
            width: '300px',
            height: '400px',
            top: 10,
            left: 0,
            right: 0,
            bottom: 10,
            mount: aboutContent,
            onfocus: function() {
                this.setBackground('#80ff00')
            },
            onblur: function() {
                this.setBackground('#ccc')
            },
        });
    } else {
        const aboutBox = new WinBox({
            title: "About Me",
            width: '400px',
            height: '400px',
            top: 50,
            left: 50,
            right: 50,
            bottom: 50,
            mount: aboutContent,
            onfocus: function() {
                this.setBackground('#80ff00')
            },
            onblur: function() {
                this.setBackground('#ccc')
            },
        });
    }
})

contact.addEventListener('click', () => {
    if(window.innerWidth < 768) {
        const contactBox = new WinBox({
            title: "Contact Me",
            width: '300px',
            height: '400px',
            top: 10,
            left: 10,
            right: 0,
            bottom: 50,
            mount: contactContent,
            onfocus: function() {
                this.setBackground('#80ff00')
            },
            onblur: function() {
                this.setBackground('#ccc')
            },
        });
    } else {
        const contactBox = new WinBox({
            title: "Contact Me",
            width: '400px',
            height: '400px',
            top: 80,
            left: 80,
            right: 50,
            bottom: 50,
            mount: contactContent,
            onfocus: function() {
                this.setBackground('#80ff00')
            },
            onblur: function() {
                this.setBackground('#ccc')
            },
        });
    }
    
})