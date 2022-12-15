import cmms2 from '../style_utilities/imgs/whoami/WhoAm2.jpg'

export const InitialParalax = () => {
    return(
        <>
            <div 
                className='mt-16 mb-12'
            >
                <div 
                    className="flex flex-col justify-center items-center"
                >
                    <img 
                        src={cmms2} 
                        alt="" 
                        className='h-40 w-40 rounded-full object-cover mb-8'
                    />
                    <p 
                        className='text-sm text-center font-Roboto'
                    >
                        I am <strong>Christian Moreno</strong>
                        <br /> and I'm a <strong><i>Junior Web Developer</i></strong>
                    </p>
                </div>
            </div>
            <div className='mb-10 w-full p-3'>
                <div
                    className='w-full mb-8'
                >
                    <h3 className='w-fit mx-auto mb-6 font-serif'>News</h3>
                    <p>Here should go what's supposed to go...</p>
                </div>
                <div
                    className='w-full mb-8'
                >
                    <h3 className='w-fit mx-auto mb-6 font-serif'>Blog</h3>
                    <p>Here should go what's supposed to go...</p>
                </div>
                <div
                    className='w-full mb-8'
                >
                    <h3 className='w-fit mx-auto mb-6 font-serif'>Work</h3>
                    <p>Here should go what's supposed to go...</p>
                </div>
                <div
                    className='w-full mb-8'
                >
                    <h3 className='w-fit mx-auto mb-6 font-serif'>Tutorials</h3>
                    <p>Here should go what's supposed to go...</p>
                </div>
            </div>
        </>
    )
}