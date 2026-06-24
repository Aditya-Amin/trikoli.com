import { registerBlockType } from '@wordpress/blocks';
import {
	useBlockProps,
	RichText,
	InspectorControls,
	AlignmentToolbar,
	BlockControls,
} from '@wordpress/block-editor';
import { PanelBody, RangeControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const { eyebrow, title, subtitle, level, align } = attributes;
		const Tag = `h${ level }`;
		const blockProps = useBlockProps( { className: `tk-heading has-text-align-${ align }` } );

		return (
			<>
				<BlockControls>
					<AlignmentToolbar value={ align } onChange={ ( v ) => setAttributes( { align: v || 'left' } ) } />
				</BlockControls>
				<InspectorControls>
					<PanelBody title={ __( 'Heading', 'trikoli' ) }>
						<RangeControl
							label={ __( 'Heading level (h1–h6)', 'trikoli' ) }
							value={ level }
							min={ 1 }
							max={ 6 }
							onChange={ ( v ) => setAttributes( { level: v } ) }
						/>
					</PanelBody>
				</InspectorControls>
				<div { ...blockProps }>
					<RichText
						tagName="span"
						className="tk-eyebrow"
						value={ eyebrow }
						onChange={ ( v ) => setAttributes( { eyebrow: v } ) }
						placeholder={ __( 'EYEBROW', 'trikoli' ) }
					/>
					<RichText
						tagName={ Tag }
						className="tk-heading__title"
						value={ title }
						onChange={ ( v ) => setAttributes( { title: v } ) }
						placeholder={ __( 'Section title…', 'trikoli' ) }
					/>
					<RichText
						tagName="p"
						className="tk-heading__sub"
						value={ subtitle }
						onChange={ ( v ) => setAttributes( { subtitle: v } ) }
						placeholder={ __( 'Optional supporting text…', 'trikoli' ) }
					/>
				</div>
			</>
		);
	},
	save( { attributes } ) {
		const { eyebrow, title, subtitle, level, align } = attributes;
		const Tag = `h${ level }`;
		const blockProps = useBlockProps.save( { className: `tk-heading has-text-align-${ align }` } );
		return (
			<div { ...blockProps }>
				{ eyebrow && <RichText.Content tagName="span" className="tk-eyebrow" value={ eyebrow } /> }
				<RichText.Content tagName={ Tag } className="tk-heading__title" value={ title } />
				{ subtitle && <RichText.Content tagName="p" className="tk-heading__sub" value={ subtitle } /> }
			</div>
		);
	},
} );
