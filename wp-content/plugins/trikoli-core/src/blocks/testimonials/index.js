import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, useInnerBlocksProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, RangeControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

const TEMPLATE = [ [ 'trikoli/testimonial', {} ], [ 'trikoli/testimonial', {} ], [ 'trikoli/testimonial', {} ] ];

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const { columns } = attributes;
		const bp = useBlockProps( { className: `tk-tm-grid tk-cols-${ columns }`, style: { '--tk-cols': columns } } );
		const ip = useInnerBlocksProps( bp, { template: TEMPLATE, allowedBlocks: [ 'trikoli/testimonial' ], orientation: 'horizontal' } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Grid', 'trikoli' ) }>
						<RangeControl label={ __( 'Columns', 'trikoli' ) } value={ columns } min={ 1 } max={ 3 } onChange={ ( v ) => setAttributes( { columns: v } ) } />
					</PanelBody>
				</InspectorControls>
				<div { ...ip } />
			</>
		);
	},
	save( { attributes } ) {
		const { columns } = attributes;
		const bp = useBlockProps.save( { className: `tk-tm-grid tk-cols-${ columns }`, style: { '--tk-cols': columns } } );
		const ip = useInnerBlocksProps.save( bp );
		return <div { ...ip } />;
	},
} );
