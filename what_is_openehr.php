<?php
$PageName = 'What is openEHR?';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include 'panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include 'panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include 'menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style=" margin-left:30px; width:900px; height:1250px;">
		
		<div id="TextArea" style="left:0px; width:900px; height:1250px;">
		
			<h1>What is openEHR?</h1>
			<p>
			<a href="files/diagrams/abstract_architecture.png"> <img src="files/diagrams/abstract_architecture.png" title="Click to enlarge" width="240" align="right" style="margin-left:30px; margin-bottom:20px; border: solid 1px #CCCCCC;"/></a>
			openEHR is a virtual community working on <em>interoperability and computability in e-health</em>. Its main focus is electronic patient records (EHRs) and systems. </p>
			<p>The openEHR Foundation has published a <a href="http://www-test.openehr.org/programs/specification/releases/currentbaseline">set of specifications</a> defining a health information <em>reference model</em>, a language for building 'clinical models', or <em>archetypes</em>, which are separate from the software, and a query language. The architecture is designed to make use of external health terminologies, such as SNOMED CT, LOINC and ICDx. Components and systems conforming to openEHR are 'open' in terms of data (they obey the published openEHR XML Schemas), models (they are driven by archetypes, written in the published ADL formalism) and APIs. They share the key openEHR innovation of adaptability, due to the archetypes being external to the software, and significant parts of the software being machine-derived from the archetypes.</p>
			<p>The essential outcome is systems and tools for computing with health information at a semantic level, thus enabling true analytic functions like decision support, and research querying.</p>


			<h2>Technical Architecture</h2>
			<p><a href="files/diagrams/multi_level_modelling.png"> <img src="files/diagrams/multi_level_modelling.png" title="Click to enlarge" width="240" align="left"  style="margin-right:30px; margin-bottom:20px; border: solid 1px #CCCCCC;"/></a>
			The openEHR technical approach is <em>multi-level modelling</em> within a service-oriented software architecture, in which models built by domain experts are in their own layer.</p>
			<p>This allows domain experts - clinicians, allied health workers, and other experts - to be directly involved in defining the semantics of clinical information systems, and it also makes using terminology much easier. You can see a whole repository of these models, known as 'archetypes' <a href="http://www.openehr.org/knowledge">here</a>, and the archetype specification is now an ISO standard (ISO 13606-2). These are now being used by several national governments to specify national e-health information standards.</p>
			<p><a href="files/diagrams/single_source_modelling.png"> <img src="files/diagrams/single_source_modelling.png" title="Click to enlarge" width="240" align="right"  style="margin-left:30px; margin-bottom:20px; border: solid 1px #CCCCCC;"/></a> openEHR has also defined specifications for clinical information models, EHR Extracts, demographics, data types and various kinds of service interfaces. These have been used in hospitals and summary EHR systems in various countries.</p>
			<p>A second dimension via which the openEHR modelling approach can be viewed is <em>single-source modelling</em>. Within this approach, archetypes and templates are definitive models of semantics, without commitment to specific messaging or document standards, or other technologies. Instead, concrete expressions are now generated artefacts. Practically, this means that data schemas such as HL7 CDA, ASTM CCR and HL7 and other message formats are now generated rather than manually modelled. Once single-source modelling is established, other outputs including UI forms and software source code. This means that a model for 'microbiology result' only needs to be done once to enable reports, UI forms, CDAs and other message formats to be generated.</p>
			
			
			<h2>Development Approach</h2>
			<p><a href="files/diagrams/openehr_platform+title+people.png"> <img src="files/diagrams/openehr_platform+title+people.png" title="Click to enlarge" width="240" align="left"  style="margin-right:30px; margin-bottom:20px; border: solid 1px #CCCCCC;"/></a>
			There are some key benefits to openEHR's approach. Firstly, it is now possible to build an EHR repository independently of content specifications. In other words, your EHR system doesn't need to know a priori about any of the clinical data it will process, such as vital signs, diagnoses or orders. Models for those things are developed separately. Models for data sets and forms are also developed separately, and UI form components are now generatable from these definitions. This enables <em>a new generation of EHR systems that routinely adapts to new requirements</em> - because that's how the architecture is designed in the first place.</p>
			<p>Secondly, building software is now very different. Significant parts of the software are now generated by tools from the templates, reducing the amount of work to do, and greatly improving semantic traceability. Model-generated code and UI (user interface) is an area of continual innovation in openEHR, and promises to revolutionise health computing.</p>
			<p>Another benefit is <em>portable queries</em> - queries based on content models, not phsyical database schemas. Coupled with EHR and vEHR service interface APIs, these are enabling a new class of decision support tools.</p>
			<p>In clinical terms, health professionals are now for the first time experiencing direct involvement in the construction and ongoing development of EHR systems. This means that <em>the quality of the data is better</em> - they designed it, and it also enables applications that work for them to be built.</p>


			<h2>An App Platform for an App World</h2>
			<p>Strategically, the openEHR approach enables a <em>platform-based e-health software market</em>, in which vendors and developers of back-end and front-end solutions interface via standardised information, standardised content models and terminology, and standardised service interfaces. This gives procurement stakeholders new choices. It also allows app developers to concentrate on their apps, and simply plug in to a reliable back-end.</p>
			
			
			<h2>Getting Involved</h2>
			<p>This website will give you information on how it all works, and how to become a <a href="./about/membership">member of openEHR</a>. Are you a clinical professional? You can help creating and reviewing the <a href="http://www.openehr.org/knowledge">archetypes</a>. Are you a message designer? You may want to get involved in building template-based message specifications, based on the archetypes. Are you a software developer? You can help build the new generation of EHR tools. If you are a researcher, you can get involved in specifying how openEHR querying, published terminologies and standards like CDISC can be used to improve how longitudinal data-based studies are done. Maybe you want to obtain tools and solutions? You will find <a href = "/entry_points/i_am_working_on/obtaining_solutions">directories of systems and applications vendors</a>, as well as <a href="./programs/software">open source components</a>.</p>
		
		</div>
		
	</div>
	
	<div id="BottomMenu">
		<?php include 'menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include 'panel/bottompanel.php' ?>
	</div>

</div>

<?php include 'panel/scriptpanel.php' ?>

</body>

</html>