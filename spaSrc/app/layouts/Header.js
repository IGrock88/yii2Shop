import React from 'react';

import {Link} from 'react-router';


export default class Header extends React.Component{

    render() {
        return (
            <header id="header">
                <div className="container">
                    <Link to={'/'} id="logo" title="Diana’s jewelry">Diana’s jewelry</Link>
                    <div className="right-links">
                        <ul>
                            <li><a href="cart.html"><span className="ico-products"></span>3 products, $4 500.00</a></li>
                            <li><a href="#"><span className="ico-account"></span>Account</a></li>
                            <li><a href="#"><span className="ico-signout"></span>Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </header>
        )
    }

}