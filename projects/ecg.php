<?php include("../header.php") ?>
  <article>
      <header style="text-align: center; padding: 1rem;">
        <h1>ECG filter using C++</h1>
        <p class="blog-meta">Published on Sep 1, 2025 • 5 min read</p>
    </header>

      <main class="blog-article">
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
          <li>Baseline wander (low-frequency drift)</li>
          <li>Power line interference (50/60 Hz)</li>
          <li>Muscle noise (EMG interference)</li>
        </ul>
    
        <h2>Example Figure</h2>
        <figure>
          <img src="/img/ecg_example.png" alt="ECG before and after filtering">
          <figcaption>Figure 1. ECG signal before and after applying a bandpass filter.</figcaption>
        </figure>
    
        <h2>Conclusion</h2>
        <p>
          Digital filters are essential tools in biomedical signal processing. 
          They help clinicians focus on the meaningful features of ECGs 
          and ignore irrelevant noise.
        </p>
      </main>
  </article>
<?php include("../footer.php") ?>