import React from 'react';
import Slider from "react-slick";

export default class BigSlider extends React.Component{
    render() {
        var settings = {
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1
        };
        return (
            <div id='slider'>
            <Slider {...settings}>
                <div className='slider__item'>
                    <h3>Make your life better</h3>
                    <p>Genuine diamonds</p>
                    <a href="#" className="btn-more">Read more</a>
                </div>
                <div className="slider__item purple">
                    <h3>She will say “yes”</h3>
                    <p>engagement ring</p>
                    <a href="#" className="btn-more">Read more</a>
                </div>
                <div className="slider__item yellow">
                    <h3>You deserve to be beauty</h3>
                    <p>golden bracelets</p>
                    <a href="#" className="btn-more">Read more</a>
                </div>
            </Slider>
            </div>

        );
    }
}