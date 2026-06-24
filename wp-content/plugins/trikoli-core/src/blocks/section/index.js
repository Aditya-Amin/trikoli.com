import { registerBlockType } from '@wordpress/blocks';
import {
	useBlockProps,
	useInnerBlocksProps,
	InspectorControls,
} from '@wordpress/block-editor';
import { PanelBody, SelectControl, ToggleControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

const TEMPLATE = [
	[ 'trikoli/heading', {} ],
	[ 'core/paragraph', { placeholder: __( 'Add section content…', 'trikoli' ) } ],
];

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const { variant, reveal } = attributes;
		const blockProps = useBlockProps( {
			className: `tk-section is-${ variant }${ reveal ? ' tk-reveal' : '' }`,
		} );
		const innerProps = useInnerBlocksProps( blockProps, {
			template: TEMPLATE,
			templateLock: false,
		} );

		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Section', 'trikoli' ) }>
						<SelectControl
							label={ __( 'Style', 'trikoli' ) }
							value={ variant }
							options={ [
								{ label: __( 'Plain', 'trikoli' ), value: 'plain' },
								{ label: __( 'Boxed card', 'trikoli' ), value: 'card' },
								{ label: __( 'Soft background', 'trikoli' ), value: 'soft' },
							] }
							onChange={ ( v ) => setAttributes( { variant: v } ) }
						/>
						<ToggleControl
							label={ __( 'Reveal on scroll', 'trikoli' ) }
							checked={ reveal }
							onChange={ ( v ) => setAttributes( { reveal: v } ) }
						/>
					</PanelBody>
				</InspectorControls>
				<section { ...innerProps } />
			</>
		);
	},
	save( { attributes } ) {
		const { variant, reveal } = attributes;
		const blockProps = useBlockProps.save( {
			className: `tk-section is-${ variant }${ reveal ? ' tk-reveal' : '' }`,
		} );
		const innerProps = useInnerBlocksProps.save( blockProps );
		return <section { ...innerProps } />;
	},
} );
