 <!-- Sidebar -->
 <div class="sidebar sidebar-style-2">
     <div class="sidebar-wrapper scrollbar scrollbar-inner">
         <div class="sidebar-content">
             <ul class="nav nav-primary">
                 <li class="nav-item" id="nav-dashboard">
                     <a href="{{ url('/dashboard') }}">
                         <i class="fas fa-home"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>

                 <li class="nav-section">
                     <span class="sidebar-mini-icon">
                         <i class="fa fa-ellipsis-h"></i>
                     </span>
                     <h4 class="text-section">Master Data</h4>
                 </li>
                 <li class="nav-item" id="nav-master-gejala">
                     <a href="{{ url('/master-data/gejala') }}">
                         <i class="fas fa-thermometer-full"></i>
                         <p>Gejala</p>
                     </a>
                 </li>
                 <li class="nav-item" id="nav-master-penyakit">
                     <a href="{{ url('/master-data/penyakit') }}">
                         <i class="fas fa-spa"></i>
                         <p>Hama dan Penyakit</p>
                     </a>
                 </li>
                 <li class="nav-item" id="nav-master-aturan">
                     <a href="{{ url('/master-data/aturan') }}">
                         <i class="fas fa-cog"></i>
                         <p>Aturan</p>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!-- End Sidebar -->
