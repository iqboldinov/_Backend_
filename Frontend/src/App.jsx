import React, { useEffect, useState } from 'react';
import { BrowserRouter as Router, Routes, Route, useNavigate } from 'react-router-dom';
import axios from 'axios'; 
import Kirish from './Kirish.jsx'; 
import About from './About.jsx';
import Connect from './Connect.jsx'; 
import { PatternFormat } from 'react-number-format'; 

const Home = () => {
  const [manzil, setManzil] = useState("http://backend.log/backend/kurslar");
  const [kurslar, setKurslar] = useState([]);
  const navigate = useNavigate();

  useEffect(() => {
    // Axios orqali ma'lumot olish
    axios.get(manzil)
      .then((malumot) => {
        setKurslar(malumot.data);
      })
      .catch((err) => {
        console.error("Backend ulanishda xato:", err);
      });
  }, [manzil]); // manzil o'zgarsa qayta ishlaydi

  return (
    <div className='min-h-screen bg-white'>
      {/* Navbar */}
      <div className="navbar bg-black text-white px-4 md:px-10 sticky top-0 z-[99]">
        <div className="navbar-start">
          <a className="text-xl font-bold">Meta IT School</a>
        </div>
        
        <div className="navbar-center hidden lg:flex">
          <ul className="menu menu-horizontal px-1">
            <li><a href="#about" className="hover:text-blue-500 cursor-pointer">Biz haqimizda</a></li>
            <li><a href="#courses" className="hover:text-blue-500 cursor-pointer">Qabullar</a></li>
            <li><a href="#contact" className="hover:text-blue-500 cursor-pointer">Biz bilan aloqa!</a></li>
          </ul>
        </div>
        
        <div className="navbar-end">
          <button onClick={() => navigate('/reg')} className="btn btn-sm md:btn-md bg-white text-black hover:bg-gray-200 border-none px-6 rounded-lg">
            Kirish
          </button>
        </div>
      </div>

      <div className='max-w-[1200px] m-auto px-4 py-8'>
        {/* Hero Section */}
        <div
          className="hero min-h-[550px] rounded-[40px] overflow-hidden mb-16 shadow-2xl relative"
          style={{
            backgroundImage: "url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1470&q=80')",
            backgroundPosition: 'center',
            backgroundSize: 'cover'
          }}
        >
          <div className="hero-overlay bg-opacity-70 bg-black"></div>
          <div className="hero-content text-center text-neutral-content">
            <div className="max-w-2xl">
              <h1 className="mb-7 text-6xl md:text-7xl font-black text-white leading-tight">
                Vaqt - bu <span className="text-blue-500">Bilim!</span>
              </h1>
              <button 
                onClick={() => navigate('/reg')}
                className="btn btn-primary bg-blue-600 border-none px-12 py-4 h-auto text-lg text-white rounded-2xl hover:bg-blue-700 shadow-lg"
              >
                kursga yozilish
              </button>
            </div>
          </div>
        </div>

        {/* About bo'limiga bazadan kelgan ma'lumotni yuboramiz */}
        <div id="about">
             <About data={kurslar} /> 
        </div>

        <div id="contact">
             <Connect />
        </div>
      </div> 
    </div> 
  );
};

const MainApp = () => {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/reg" element={<Kirish />} />
      </Routes>
    </Router>
  );
};

export default MainApp;