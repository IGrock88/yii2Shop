import React from 'react';
import {Link} from 'react-router';

export default class MainMenu extends React.Component{


    constructor(props){
        super(props);

        this.state = {
            isActive: false
        };

        this.menuLi = [
            {title: 'New collection', link: '/products/new'},
            {title: 'necklaces', link: '/products/necklaces'},
            {title: 'earrings', link: '/products/earrings'},
            {title: 'Rings', link: '/products/rings'},
            {title: 'Gift cards', link: '/products/giftcards'},
            {title: 'Promotions', link: '/products/promotions'},
        ];
    }

    toggleMenu = () => {
        this.setState({
            isActive: !this.state.isActive
        })
    };

    render(){
        let items = this.menuLi.map((item, index) =>
            <li role="presentation" key={index}>
                <Link to={item.link}>{item.title}</Link>
            </li>
        );
        return (
            <nav id="menu">
                <div className="container">
                    <button className="trigger" onClick={this.toggleMenu}/>
                    <ul className={this.state.isActive ? 'active' : ''}>
                        {items}
                    </ul>
                </div>
            </nav>
        );
    }
}