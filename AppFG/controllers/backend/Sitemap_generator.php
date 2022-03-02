<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap_generator extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        
        // $this->load->library('session');
        // $this->load->library('sitemap_generator');

        // $yourSiteUrl = 'https://example.com';
		// $yourSiteUrl = base_url();

		// Setting the current working directory to be output directory
		// for generated sitemaps (and, if needed, robots.txt)
		// The output directory setting is optional and provided for demonstration purposes.
		// The generator writes output to the current directory by default. 
		$outputDir = getcwd();

		// $generator = new \Icamys\SitemapGenerator\SitemapGenerator($yourSiteUrl, $outputDir);
		$generator = new \Icamys\SitemapGenerator\SitemapGenerator(base_url(), $outputDir);

		// Create a compressed sitemap
		$generator->enableCompression();

		// Determine how many urls should be put into one file;
		// this feature is useful in case if you have too large urls
		// and your sitemap is out of allowed size (50Mb)
		// according to the standard protocol 50000 urls per sitemap
		// is the maximum allowed value (see http://www.sitemaps.org/protocol.html)
		$generator->setMaxUrlsPerSitemap(50000);

		// Set the sitemap file name
		$generator->setSitemapFileName("sitemap.xml");

		// Set the sitemap index file name
		$generator->setSitemapIndexFileName("sitemap-index.xml");

		// Add alternate languages if needed
		$alternates = [
			['hreflang' => 'de', 'href' => "http://www.example.com/de"],
			['hreflang' => 'fr', 'href' => "http://www.example.com/fr"],
		];

		// Add url components: `path`, `lastmodified`, `changefreq`, `priority`, `alternates`
		// Instead of storing all urls in the memory, the generator will flush sets of added urls
		// to the temporary files created on your disk.
		// The file format is 'sm-{index}-{timestamp}.xml'
		$generator->addURL('/path/to/page/', new DateTime(), 'always', 0.5, $alternates);

		// Flush all stored urls from memory to the disk and close all necessary tags.
		$generator->flush();

		// Move flushed files to their final location. Compress if the option is enabled.
		$generator->finalize();

		// Update robots.txt file in output directory or create a new one
		$generator->updateRobots();

		// Submit your sitemaps to Google, Yahoo, Bing and Ask.com
		$generator->submitSitemap();
    }


    public function index()
    {
        
    }
}
