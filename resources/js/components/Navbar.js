import React from 'react';
import ReactDOM from 'react-dom';

export default class Navbar extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            setFixed: false,
            active: 0,
        };

        this.listenToScroll = this.listenToScroll.bind(this);
    }

    componentDidMount() {
        window.addEventListener('scroll', this.listenToScroll)
    }

    listenToScroll() {
        const winScroll =
          document.body.scrollTop || document.documentElement.scrollTop

        if (winScroll > document.getElementsByClassName('matrix_section')[0].clientHeight) {
            this.setState({ setFixed: true, active: 1, })
        } else {
            this.setState({ setFixed: false, active: 0, })
        }
    }

    render() {
        const { setFixed, active } = this.state;

        return (
            <nav className={ setFixed ? "navbar fixed": "navbar"} >
                <ul>
                    <li>
                        <a className={ (active == 0) ? 'active tab' : 'tab' } href="/">Home</a>
                    </li>
                    <li>
                        <a className={ (active == 1) ? 'active tab' : 'tab' } href="/about">About</a>
                    </li>
                    <li>
                        <a className={ (active == 2) ? 'active tab' : 'tab' } href="/portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a className={ (active == 3) ? 'active tab' : 'tab' } href="/contact">Contact</a>
                    </li>
                </ul>
            </nav>
        );
    }
}

if (document.getElementById('navbar_container')) {
    ReactDOM.render(<Navbar />, document.getElementById('navbar_container'));
}