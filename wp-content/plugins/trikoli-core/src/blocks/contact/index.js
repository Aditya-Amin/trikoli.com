import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl, ToggleControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const bp = useBlockProps( { className: 'tk-contact' } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Contact details', 'trikoli' ) }>
						<TextControl label={ __( 'Email', 'trikoli' ) } value={ a.email } onChange={ ( v ) => setAttributes( { email: v } ) } />
						<TextControl label={ __( 'Phone', 'trikoli' ) } value={ a.phone } onChange={ ( v ) => setAttributes( { phone: v } ) } />
						<TextControl label={ __( 'Location', 'trikoli' ) } value={ a.location } onChange={ ( v ) => setAttributes( { location: v } ) } />
						<TextControl label={ __( 'Map search query', 'trikoli' ) } value={ a.mapQuery } onChange={ ( v ) => setAttributes( { mapQuery: v } ) } />
						<TextControl label={ __( 'Form recipient (blank = site admin)', 'trikoli' ) } value={ a.recipient } onChange={ ( v ) => setAttributes( { recipient: v } ) } />
						<ToggleControl label={ __( 'Show map', 'trikoli' ) } checked={ a.showMap } onChange={ ( v ) => setAttributes( { showMap: v } ) } />
						<ToggleControl label={ __( 'Show form', 'trikoli' ) } checked={ a.showForm } onChange={ ( v ) => setAttributes( { showForm: v } ) } />
					</PanelBody>
				</InspectorControls>
				<div { ...bp }>
					<div className="tk-contact__cards">
						<div className="tk-contact__card"><span className="tk-contact__ic">✉</span><h4>{ __( 'Email', 'trikoli' ) }</h4><p>{ a.email }</p></div>
						<div className="tk-contact__card"><span className="tk-contact__ic">✆</span><h4>{ __( 'Phone', 'trikoli' ) }</h4><p>{ a.phone }</p></div>
						<div className="tk-contact__card"><span className="tk-contact__ic">📍</span><h4>{ __( 'Location', 'trikoli' ) }</h4><p>{ a.location }</p></div>
					</div>
					{ a.showForm && (
						<p className="tk-contact__note">{ __( '⚙ The live contact form renders on the front end (emails the recipient).', 'trikoli' ) }</p>
					) }
				</div>
			</>
		);
	},
	save() {
		return null; // dynamic block — see render.php
	},
} );
