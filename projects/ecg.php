<?php include("../header.php") ?>
  
  <article>
    <header style="text-align: center; padding: 1rem;">
      <h1>ECG filter using Python</h1>
      <p class="blog-meta">Published on Sep 1, 2025 • 5 min read</p>
    </header>

      <main class="blog-article">
        <p style="background-color: red; color: white; padding: 3px; text-align: center;"><b>THIS PROJECT IS NOT FINISHED YET!</b></p>
        <div class="project-resources">
          <h3>Project resources</h3>
          <ul>
            <li>Google Colab</li>
            <li>Github repo</li>
            <li>Physionet ECG signal database</li>
          </ul>
        </div>
        <p>
          Electrocardiogram (ECG) signals are often affected by noise such as baseline wander,
          muscle artifacts, and power line interference. To make these signals useful for
          medical interpretation, we apply digital filters…
        </p>
    
        <h2>Why Filtering Matters</h2>
        <p>
          Noise in ECG signals can obscure critical features such as the P wave,
          QRS complex, and T wave. By applying filters, we improve signal quality
          and diagnostic accuracy.
        </p>
    
        <h2>Types of Noise</h2>
        <ul>
          <li>Baseline wander (low-frequency drift caused by patient breathing, movement and poor electrode contact)</li>
          <li>Power line interference (50/60 Hz)</li>
          <li>Muscle noise (EMG interference)</li>
        </ul>
        <p>It's important to mention that there are different kinds of ECG equipment, designed for different purposes. In general:
        </p>
        <ol>
          <li>Diagnostic equipment: requieres high precision to find and diagnose pathologies. Used in, for example, a cardilogy lab. This kind of equipment uses a wider bandwith (0.05 Hz to 100 Hz, depending on the manufacturer)</li>
          <li>Monitoring equipment: does not requiere that amount of precision, it is only meant for checking the patient vitals along with other diagnostic data (0.05 Hz to 40 Hz, also depeding on the equipment)</li>
        </ol>
          <p>Different kinds of equipment, will require specific filters due to the different bandwiths they work with.</p>
        
        <h2>What kind of filters are used</h2>
        <p>
          In a basic design, the two kinds of filters that an ECG signal needs is:
          <ul>
            <li><b>Notch filter:</b> used to remove the power line interference at 50/60Hz</li>
            <li><b>Bandpass filter:</b> used to keep only the band of frequencies we are interested in, and removing all other signals with high frequency components</li>
          </ul>
        </p>
        <p>
          Since the electrical activity of the heart only produces signals in the range of 0.05 to 100 Hz, but mostly up to 40/50 Hz, this is the band I'm going to be focusing on this design.
        </p>
        <p>In the following scheme, we can see the basic frequency structure of the filter:</p>
        <img src="img/ecg-filter-freq-graph.jpeg" width="100%" alt="Frequency diagram of the filter">
        <p>It is important to mention that real equipment uses more complex filters, adding more layers of filtering to this basic desing.</p>

        <h2>The ECG signal</h2>
        <p>Using <a href="https://physionet.org/content/ptb-xl/1.0.3/" target="_blank">Physionet's PTB-XL dataset</a>, we have access to a large dataset of real ECG signals.</p>
        <h2>Conclusion</h2>
        <p>
          Digital filters are essential tools in biomedical signal processing. 
          They help clinicians focus on the meaningful features of ECGs 
          and ignore irrelevant noise.
        </p>
      </main>
  </article>
<?php include("../footer.php") ?>