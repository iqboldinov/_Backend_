import React, { useState } from 'react';
import { useNavigate } from 'react-router-dom';
import axios from 'axios';
import { PatternFormat } from 'react-number-format'; 

const Kirish = () => {
  const navigate = useNavigate();
  
  const [formData, setFormData] = useState({
    full_name: '',
    phone: '',
    country_code: '+998',
    course: 'Frontend'
  });

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      const apiUrl = 'http://backend.log/index.php?r=site/save-lead'; 
      
      const response = await axios.post(apiUrl, formData);
      
      if (response.data.status === "success") {
        alert("Muvaffaqiyatli: " + response.data.message);
        navigate('/'); 
      } else {
        alert("Xatolik: " + response.data.message);
      }
    } catch (error) {
      console.error("Bog'lanish xatosi:", error);
      alert("Server bilan bog'lanishda xato! OpenServerni administrator bo'lib yoqing.");
    }
  };

  return (
    <div className="min-h-screen bg-[#B9A3D2] flex items-center justify-center p-4 font-sans">
      <div className="bg-white p-8 rounded-[30px] shadow-2xl w-full max-w-md border border-white">
        <h2 className="text-3xl font-black text-center mb-6 text-gray-800 tracking-tight">
          Ro'yxatdan o'tish
        </h2>
        
        <form className="space-y-5" onSubmit={handleSubmit}>
     
          <div>
            <label className="block text-sm font-bold text-gray-700 mb-1 ml-1">To'liq ismingiz</label>
            <input 
              type="text" 
              required
              placeholder="Masalan: Karimov Muhammadyusuf" 
              className="w-full p-4 rounded-2xl bg-gray-50 border border-gray-200 text-black focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all" 
              onChange={(e) => setFormData({...formData, full_name: e.target.value})}
            />
          </div>
          
       
          <div>
            <label className="block text-sm font-bold text-gray-700 mb-1 ml-1">Telefon raqamingiz</label>
            <div className="flex gap-2">
              <select 
                className="p-4 rounded-2xl bg-gray-50 border border-gray-200 text-black focus:outline-none focus:ring-2 focus:ring-blue-500"
                onChange={(e) => setFormData({...formData, country_code: e.target.value})}
              >
                <option value="+998">🇺🇿 +998</option>
                <option value="+7">🇷🇺 +7</option>
                <option value="+1">🇺🇸 +1</option>
              </select>

              <PatternFormat
                format="## ### ## ##"
                mask="_"
                required
                placeholder="90 123 45 67"
                className="flex-1 p-4 rounded-2xl bg-gray-50 border border-gray-200 text-black focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all"
                onValueChange={(values) => {
                  setFormData({...formData, phone: values.value});
                }}
              />
            </div>
          </div>

          
          <div>
            <label className="block text-sm font-bold text-gray-700 mb-1 ml-1">Kursni tanlang</label>
            <select 
              className="w-full p-4 rounded-2xl bg-gray-50 border border-gray-200 text-black focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all"
              onChange={(e) => setFormData({...formData, course: e.target.value})}
            >
              <option value="Frontend">Frontend Development</option>
              <option value="Backend">Backend Development</option>
              <option value="SMM">SMM Marketing</option>
            </select>
          </div>

          <button 
            type="submit" 
            className="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-2xl mt-4 transition-all transform hover:scale-[1.02] active:scale-95 shadow-lg shadow-blue-200"
          >
            Arizani yuborish
          </button>
        </form>

        <button 
          onClick={() => navigate('/')} 
          className="w-full mt-6 text-gray-400 hover:text-gray-600 text-sm font-medium transition-colors"
        >
          ← Asosiy sahifaga qaytish
        </button>
      </div>
    </div>
  );
};

export default Kirish;