import React from 'react';

const Connect = () => {
  return (
    <section id="contact" className="py-20 bg-slate-50">
      <div className="container mx-auto px-4 md:px-10">
        <div className="flex flex-col lg:flex-row items-center gap-16">
          
      
          <div className="w-full lg:w-1/2">
            <div className="bg-white rounded-[2rem] p-10 shadow-xl border border-slate-100 flex flex-col gap-8">
              
           
              <a href="tel:+998941544488" className="flex items-center gap-6 group cursor-pointer">
                <div className="w-14 h-14 bg-gray-100 rounded-2xl flex items-center justify-center group-hover:bg-red-600 transition-all duration-300">
                  <span className="text-2xl group-hover:scale-110 transition-transform">📞</span>
                </div>
                <div>
                  <p className="text-2xl font-black text-slate-900 group-hover:text-red-600 transition-colors">
                    +998 94 154 44 88
                  </p>
                </div>
              </a>

          
                <a href="https://t.me/metaitschool_admin" target="_blank" rel="noreferrer" className="flex items-center gap-6 group cursor-pointer">
                <div className="w-14 h-14 bg-gray-100 rounded-2xl flex items-center justify-center group-hover:bg-[#0088cc] transition-all duration-300">
                  
                    <i className="fa-brands fa-telegram text-3xl text-[#0088cc] group-hover:text-white transition-colors"></i>
                </div>
                <div>
                    <p className="text-2xl font-black text-slate-900 group-hover:text-[#0088cc] transition-colors">
                    @metaitschool_admin
                    </p>
                </div>
                </a>

           
                <a href="https://instagram.com/metaitschool" target="_blank" rel="noreferrer" className="flex items-center gap-6 group cursor-pointer">
                <div className="w-14 h-14 bg-gray-100 rounded-2xl flex items-center justify-center group-hover:bg-gradient-to-tr group-hover:from-[#f9ce34] group-hover:via-[#ee2a7b] group-hover:to-[#6228d7] transition-all duration-500 shadow-sm">
              
                    <i className="fa-brands fa-instagram text-3xl text-slate-700 group-hover:text-white transition-colors duration-300"></i>
                </div>
                <div>
                    <p className="text-2xl font-black text-slate-900 group-hover:text-[#ee2a7b] transition-colors">
                    Meta IT School
                    </p>
                </div>
                </a>

            </div>
          </div>

         
          <div className="w-full lg:w-1/2 text-left">
            <h2 className="text-5xl md:text-6xl font-black text-slate-900 mb-8 italic uppercase tracking-tighter leading-tight">
              Biz bilan bog'laning!
            </h2>
            <p className="text-xl md:text-2xl text-slate-600 leading-relaxed font-medium">
              IT sohasida o'qishga qiziqishingiz bo'lsa, kelajakka qadam qo'yishni istasangiz. 
              Biz bilan aloqaga chiqsangiz, sizga hammasini batafsil tushuntirib berishadi.
            </p>
          </div>

        </div>
      </div>
    </section>
  );
};

export default Connect;