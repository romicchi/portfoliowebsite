document.addEventListener('mousemove', function(e) {
    document.body.style.setProperty('--x', e.clientX + 'px');
    document.body.style.setProperty('--y', e.clientY + 'px');
});

document.getElementById('leftContent').addEventListener('wheel', function(e) {
    if (!e.ctrlKey) {
        document.getElementById('rightContent').scrollTop += e.deltaY * 3; // Increase the scroll speed by a factor of 3
        e.preventDefault();
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    const menuLinks = {
        about: document.getElementById('link-about'),
        experiences: document.getElementById('link-experiences'),
        projects: document.getElementById('link-projects')
    };

    function onScroll() {
        let rightContent = document.getElementById('rightContent');
        let scrollPos = rightContent.scrollTop + rightContent.clientHeight / 2;

        sections.forEach(section => {
            let currentLink = menuLinks[section.id];
            if (scrollPos >= section.offsetTop && scrollPos < section.offsetTop + section.offsetHeight) {
                currentLink.classList.add('bold');
            } else {
                currentLink.classList.remove('bold');
            }
        });
    }

    document.getElementById('rightContent').addEventListener('scroll', onScroll);
    onScroll(); // Trigger on page load
});