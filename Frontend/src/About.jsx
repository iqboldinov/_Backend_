import React, { useState } from 'react';

const About = () => {
 
  const [activeCourse, setActiveCourse] = useState('frontend');

 
  const courses = {
    frontend: {
      title: "Frontend Developer",
      html: "Bu kursda siz saytni brauzer yordamida ochib ishlashingiz va sayt yaratishingiz mumkin.",
      js: "Bu kursda siz animatsiya, sekundomer, tugmalarga har-xil funksiyalar berishingiz mumkin.",
      css: "Bu kursda siz yaratayotgan saytingizni ko'rinishi, stayli, rangi, hajmini boshqarish mumkin.",
      react: "Bu kursda siz juda katta saytlarni har-xil kutubxonalar yordamida yaratishni o'rganasiz."
    },
    backend: {
      title: "Backend Developer",
      html: "Python/Node.js: Server tomoni mantiqini va algoritmlarni tuzishni o'rganasiz.",
      js: "Database: MySQL va PostgreSQL bilan ma'lumotlarni saqlashni o'rganasiz.",
      css: "API: Frontend va Backend o'rtasida ma'lumot almashish texnologiyalari.",
      react: "Security: Saytni xavfsizligini ta'minlash va serverni boshqarish."
    },
    smm: {
      title: "SMM Mutaxassisi",
      html: "Ijtimoiy tarmoqlarda reklama kampaniyalarini to'g'ri sozlash.",
      js: "Auditoriyani jalb qiluvchi postlar ketma-ketligini tuzish.",
      css: "Mijozlarni sotib olishga undovchi matnlar yozish san'ati.",
      react: "Reklama natijalarini tahlil qilish va samaradorlikni oshirish."
    },
    robototexnika: {
      title: "Robototexnika muhandisi",
      html: "Mikrokontrollerlarni dasturlash va sensorlar bilan ishlash.",
      js: "C++: Robotlarning harakatlanish mantiqi uchun dasturlar yozish.",
      css: "Elektronika: Elektr zanjirlari va sxemalarini yig'ishni o'rganish.",
      react: "Mexanika: Robot qismlarini modellashtirish va yig'ish."
    }
  };

 
  const data = courses[activeCourse];

  return (
    <div className="bg-white min-h-screen">
    
      <div className="bg-gray-50 py-6 sticky top-0 z-40 border-b border-gray-200 shadow-sm">
        <div className="flex flex-wrap justify-center gap-3 px-4">
          {Object.keys(courses).map((key) => (
            <button
              key={key}
              onClick={() => setActiveCourse(key)}
              className={`btn btn-sm md:btn-md rounded-xl px-6 uppercase font-bold transition-all duration-300 ${
                activeCourse === key 
                ? 'btn-primary shadow-md scale-105' 
                : 'btn-ghost text-gray-500 hover:bg-gray-200'
              }`}
            >
              {key}
            </button>
          ))}
        </div>
      </div>

      
      <section id="courses" className="py-20 px-6 max-w-6xl mx-auto transition-opacity duration-500">
        <h2 className="text-4xl md:text-6xl font-black text-center mb-20 text-slate-900 italic uppercase tracking-tighter">
          {data.title}
        </h2>
        
        <div className="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-16">
          <div className="space-y-12">
            <div>
              <h3 className="text-3xl font-bold mb-4 text-blue-600 border-l-4 border-blue-600 pl-4 uppercase">
                {activeCourse === 'frontend' ? 'HTML' : 'Asosiy'}
              </h3>
              <p className="text-gray-600 text-lg leading-relaxed font-medium">{data.html}</p>
            </div>
            <div>
              <h3 className="text-3xl font-bold mb-4 text-blue-600 border-l-4 border-blue-600 pl-4 uppercase">
                {activeCourse === 'frontend' ? 'JS' : 'Mantiq'}
              </h3>
              <p className="text-gray-600 text-lg leading-relaxed font-medium">{data.js}</p>
            </div>
          </div>
          
          <div className="space-y-12">
            <div>
              <h3 className="text-3xl font-bold mb-4 text-blue-600 border-l-4 border-blue-600 pl-4 uppercase">
                {activeCourse === 'frontend' ? 'CSS' : 'Dizayn'}
              </h3>
              <p className="text-gray-600 text-lg leading-relaxed font-medium">{data.css}</p>
            </div>
            <div>
              <h3 className="text-3xl font-bold mb-4 text-blue-600 border-l-4 border-blue-600 pl-4 uppercase">
                {activeCourse === 'frontend' ? 'React' : 'Natija'}
              </h3>
              <p className="text-gray-600 text-lg leading-relaxed font-medium">{data.react}</p>
            </div>
          </div>
        </div>
      </section>

     
      <footer className="bg-[#0a0a0a] text-white py-24 px-10">
        <div className="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-16">
      
          <div>
            <h4 className="text-gray-500 uppercase tracking-widest mb-8 font-bold text-sm border-b border-gray-800 pb-2 inline-block">Services</h4>
            <ul className="space-y-4 text-xl font-semibold">
              {Object.keys(courses).map((key) => (
                <li 
                  key={key} 
                  className={`cursor-pointer hover:text-blue-500 transition-colors uppercase ${activeCourse === key ? 'text-blue-600' : 'text-gray-300'}`}
                  onClick={() => {
                    setActiveCourse(key);
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                  }}
                >
                  {key}
                </li>
              ))}
            </ul>
          </div>

    
          <div>
            <h4 className="text-gray-500 uppercase tracking-widest mb-8 font-bold text-sm border-b border-gray-800 pb-2 inline-block">Legal</h4>
            <ul className="space-y-4 text-xl font-semibold text-gray-300">
              <li className="hover:text-blue-500 cursor-pointer transition-colors">Terms of use</li>
              <li className="hover:text-blue-500 cursor-pointer transition-colors">Privacy policy</li>
              <li className="hover:text-blue-500 cursor-pointer transition-colors">Cookie policy</li>
            </ul>
          </div>

          
          <div>
            <h4 className="text-gray-500 uppercase tracking-widest mb-8 font-bold text-sm border-b border-gray-800 pb-2 inline-block">Company</h4>
            <ul className="space-y-4 text-xl font-semibold text-gray-300">
              <li className="hover:text-blue-500 cursor-pointer transition-colors">Biz haqimizda!</li>
              <li className="hover:text-blue-500 cursor-pointer transition-colors">Biz bilan aloqa!</li>
              <li className="hover:text-blue-500 cursor-pointer transition-colors">Kirish</li>
            </ul>
          </div>
        </div>

        <div className="mt-24 pt-10 border-t border-gray-900 flex flex-col md:flex-row justify-between items-center text-gray-500 font-medium">
           <p className="text-sm uppercase tracking-[0.3em]">Meta IT School © 2024</p>
           <div className="flex gap-6 mt-6 md:mt-0">
              <span className="hover:text-white cursor-pointer transition-colors">Instagram</span>
              <span className="hover:text-white cursor-pointer transition-colors">Telegram</span>
           </div>
        </div>
      </footer>
    </div>
  );
};

export default About;