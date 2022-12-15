import { useState } from "react"
import Logo from "../../style_utilities/logos/LettersLogo512.svg"
export const Header = () => {

    const [ showPagesMenu, setShowPagesMenu ] = useState(false)

    return(
        <>
            <header className="w-screen flex justify-between items-center p-3">
                <div
                    className="w-[12.5%]"
                >
                    <img 
                        src={Logo}
                        alt="logo"
                        className="w-full"
                    />
                </div>
                <div
                    className="w-[12.4%] cursor-pointer"
                    onClick={() => setShowPagesMenu(true)}
                >
                    <svg 
                        xmlns="http://www.w3.org/2000/svg"
                        className="h-full w-full"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        strokeWidth="1.2"
                    >
                        <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                </div>
            </header>
            <div
                className={`fixed w-screen h-screen 
                    ${showPagesMenu 
                        ? 
                        "translate-x-0" 
                        : 
                        "translate-x-full"}
                    bg-oxfordBlue text-cultured top-0 left-0  ease-in-out duration-300`}
            >
                <ul className="flex flex-col items-center justify-evenly w-full h-full">
                    <div 
                        className="fixed top-0 right-0 m-3 w-[12.4%] cursor-pointer"
                        onClick={() => setShowPagesMenu(false)}
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            className="h-full w-full"
                            fill="none"
                            viewBox="0 0 24 24"
                            strokeWidth="1.2"
                            stroke="currentColor"
                        >
                            <path 
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                d="M6 18L18 6M6 6l12 12" 
                            />
                        </svg>
                    </div>
                    <li>Works</li>
                    <li>Blog</li>
                    <li>News</li>
                    <li>About Me</li>
                    <li>Contact Me</li>
                </ul>
            </div>
        </>
    )
}