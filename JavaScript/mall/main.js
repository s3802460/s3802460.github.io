// New1
const notification = document.createElement('div');
notification.setAttribute('class', 'notification')

const notification_h1 = document.createElement('h1');
notification_h1.innerText = 'I use cookies';

const notification_p = document.createElement('p');
notification_p.innerText = 'My website use coookies necessary for its basic functioning. By continuing browsing, you consent to my use of cookies and other technologies';

const notification_accept = document.createElement('a');
notification_accept.innerText = 'I understand';
notification_accept.setAttribute('id', 'accept');


const notification_learn_more = document.createElement('a');
notification_learn_more.innerText = 'Learn more';
notification_learn_more.setAttribute('id', 'learn-more');

notification.appendChild(notification_h1);
notification.appendChild(notification_p);
notification.appendChild(notification_accept);
notification.appendChild(notification_learn_more);


document.body.appendChild(notification);


notification_learn_more.addEventListener('click', () => {

})

notification_accept.addEventListener('click', () => {
    sessionStorage.setItem('cookie', 1);
    notification.classList.add('none');
})
if (sessionStorage.getItem('cookie')) {
    notification.classList.add('none');
}
// End of New 1



// New 3
const member = document.querySelectorAll('.members .row .member');
const dim = document.querySelector('#dim');
member.forEach(element => {
    let parent = element.querySelector('.back');
    element.querySelector('img').addEventListener('click', () => {
        document.querySelector('#dim').style.display = "block";
        document.querySelector('#dim').style.opacity = "1";
        document.querySelector('#dim').style.transition = "opacity 0.5s";
        document.querySelector('body').classList.add('lock');
        console.log(parent);
        parent.style.display = 'block';
        parent.style.cursor = 'move'
        dim.addEventListener('click', () => {
            const body = document.querySelector('body');
            body.classList.remove('lock');
            document.querySelector('#dim').style.display = "none";
            document.querySelector('#dim').style.opacity = "0";
            parent.style.display = 'none';
        })
        parent.addEventListener('click', () => {
            const body = document.querySelector('body');
            body.classList.remove('lock');
            document.querySelector('#dim').style.display = "none";
            document.querySelector('#dim').style.opacity = "0";
            parent.style.display = 'none';
        })
    })
});
// End of New 3





